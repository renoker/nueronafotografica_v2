<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Mail\ContactoMail;
use App\Models\AdminSliderGeneral;
use App\Models\CardTextContact;
use App\Models\Contact;
use App\Models\Translation;
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Google\Cloud\RecaptchaEnterprise\V1\RecaptchaEnterpriseServiceClient;
use Google\Cloud\RecaptchaEnterprise\V1\Event;
use Google\Cloud\RecaptchaEnterprise\V1\Assessment;
use Google\Cloud\RecaptchaEnterprise\V1\TokenProperties;


class ContactController extends Controller
{

    public function index($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'contacto')->where('page', 'Contacto')->get();
            $traslateContact = Translation::select(['translate_es AS title'])->where('key', 'contactanos')->get();
            $cardText = CardTextContact::select(['description_es AS descripcion', 'name_es AS name', 'ocupacion_es AS ocupacion'])->get();
        } elseif ($language == 'en') {
            $traslate = Translation::select(['translate_en AS title'])->where('key', 'contacto')->where('page', 'Contacto')->get();
            $traslateContact = Translation::select(['translate_en AS title'])->where('key', 'contactanos')->get();
            $cardText = CardTextContact::select(['description_en AS descripcion', 'name_en AS name', 'ocupacion_en AS ocupacion'])->get();
        } else {
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'contacto')->where('page', 'Contacto')->get();
            $traslateContact = Translation::select(['translate_es AS title'])->where('key', 'contactanos')->get();
            $cardText = CardTextContact::select(['description_es AS descripcion', 'name_es AS name', 'ocupacion_es AS ocupacion'])->get();
        }

        $slider_general_uno = AdminSliderGeneral::where('key', 'contacto')->where('position', 1)->orderBy('order', 'asc')->get();
        $slider_general_dos = AdminSliderGeneral::where('key', 'contacto')->where('position', 2)->orderBy('order', 'asc')->get();
        $slider_general_tres = AdminSliderGeneral::where('key', 'contacto')->where('position', 3)->orderBy('order', 'asc')->get();
        $slider_general_cuatro = AdminSliderGeneral::where('key', 'contacto')->where('position', 4)->orderBy('order', 'asc')->get();

        return view('pages.contacto', [
            'slider_general_uno'    => $slider_general_uno,
            'slider_general_dos'    => $slider_general_dos,
            'slider_general_tres'   => $slider_general_tres,
            'slider_general_cuatro' => $slider_general_cuatro,
            'traslate'              => $traslate,
            'traslateContact'       => $traslateContact,
            'cardText'              => $cardText,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {

        $recaptchaToken = $request->input('recaptcha_token');

        $client = new RecaptchaEnterpriseServiceClient();
        $projectID = '716782090777';
        $event = new Event();
        $event->setToken($recaptchaToken);
        $event->setSiteKey('6LfWECcqAAAAAAnEPOJocwUFtNiFre3Rl2TuuZ4T');

        $assessment = $client->createAssessment(
            $client->projectName($projectID),
            (new Assessment())->setEvent($event)
        );

        $tokenProperties = $assessment->getTokenProperties();

        if ($tokenProperties->getValid() && $assessment->getRiskAnalysis()->getScore() >= 0.5) {
            $row = new Contact;
            $row->name = $request->name;
            $row->email = $request->email;
            $row->phone = $request->phone;
            $row->message = $request->message;
            $row->save();

            $details = [
                'name' => $row->name,
                'email' => $row->email,
                'phone' => $row->phone,
                'message' => $row->message
            ];

            Mail::to('rodolfoulises.ramirez@gmail.com')->send(new ContactoMail($details));
            return redirect()->back()->with([
                'message' => 'Tus datos se enviaron de forma correcta, nos pondremos en contacto contigo en un lapso no mayor a 24hrs'
            ]);
        } else {
            // Token no válido o riesgo alto
            return back()->withErrors(['recaptcha' => 'No se pudo verificar el reCAPTCHA.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('list_contact.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listadoContacto()
    {
        $contactos = Contact::all();
        return view('backoffice.contacto.index', [
            'list'    => $contactos,
            'page'  => 'Listado de Contactos',
        ]);
    }
}
