<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsletterRequest;
use App\Http\Requests\UpdateNewsletterRequest;
use App\Models\Newsletter;
use Google\Cloud\RecaptchaEnterprise\V1\RecaptchaEnterpriseServiceClient;
use Google\Cloud\RecaptchaEnterprise\V1\Event;
use Google\Cloud\RecaptchaEnterprise\V1\Assessment;
use Google\Cloud\RecaptchaEnterprise\V1\TokenProperties\InvalidReason;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreNewsletterRequest $request)
    {
        $recaptchaToken = $request->input('recaptcha_token_newsletter');

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . storage_path('app/google-credentials.json'));

        $client = new RecaptchaEnterpriseServiceClient();
        $projectID = 'neuronafotografi-1723669019139';
        $event = new Event();
        $event->setToken($recaptchaToken);
        $event->setSiteKey('6LfWECcqAAAAAAnEPOJocwUFtNiFre3Rl2TuuZ4T');

        $assessment = $client->createAssessment(
            $client->projectName($projectID),
            (new Assessment())->setEvent($event)
        );

        $tokenProperties = $assessment->getTokenProperties();

        if ($tokenProperties->getValid() && $assessment->getRiskAnalysis()->getScore() >= 0.5) {
            $row = new Newsletter;
            $row->email = $request->email_newsletter;
            $row->save();

            return redirect()->back()->with([
                'message' => '¡Gracias!'
            ]);
        } else {
            // Token no válido o riesgo alto
            return back()->withErrors(['recaptcha' => 'No se pudo verificar el reCAPTCHA.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsletterRequest $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
}
