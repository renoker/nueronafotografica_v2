<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\AdminHomeSlider;
use App\Models\Finish;
use App\Models\GaleriaBlog;
use App\Models\Gallery;
use App\Models\Paper;
use App\Models\Size;
use App\Models\Translation;
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use SendGrid\Mail\Mail;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'galeria')->where('page', 'Galeria')->get();
        } elseif ($language == 'en') {
            $traslate = Translation::select(['translate_en AS title'])->where('key', 'galeria')->where('page', 'Galeria')->get();
        } else {
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'galeria')->where('page', 'Galeria')->get();
        }

        $gallery = Gallery::orderBy('order', 'asc')->get();
        return view('pages.galeria', [
            'list'          => $gallery,
            'traslate'      => $traslate,
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
    public function store(StoreGalleryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function cotizador(Gallery $gallery, $language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $slider_top = AdminHomeSlider::select(['id', 'href', 'image', 'es_title AS title', 'es_description AS description', 'es_button AS button',])->where('key', 'cotizador')->get();
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'cotizador')->where('page', 'Cotizador')->get();
        } elseif ($language == 'en') {
            $slider_top = AdminHomeSlider::select(['id', 'href', 'image', 'en_title AS title', 'en_description AS description', 'en_button AS button',])->where('key', 'cotizador')->get();
            $traslate = Translation::select(['translate_en AS title'])->where('key', 'cotizador')->where('page', 'Cotizador')->get();
        } else {
            $slider_top = AdminHomeSlider::select(['id', 'href', 'image', 'es_title AS title', 'es_description AS description', 'es_button AS button',])->where('key', 'cotizador')->get();
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'cotizador')->where('page', 'Cotizador')->get();
        }

        $size = Size::all();

        return view('pages.cotizador', [
            'slider_top'    => $slider_top,
            'row'           => $gallery,
            'traslate'      => $traslate,
            'size'          => $size,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }

    // ------------------------------------------------------------------------------------------------------------------------------                        ------------------------------------------------------------------------------------------------------------------------------
    // ------------------------------------------------------------------------------------------------------------------------------  PANEL ADMINISTRACIÖN  ------------------------------------------------------------------------------------------------------------------------------
    // ------------------------------------------------------------------------------------------------------------------------------                        ------------------------------------------------------------------------------------------------------------------------------

    public function backofficeIndex()
    {
        $gallery = Gallery::orderBy('order', 'asc')->get();
        return view('backoffice.galeria.list.index', [
            'page'          => 'Galería',
            'rutaCreate'    => 'backoffice_gallery.create',
            'rutaDestroy'   => 'backoffice_gallery.destroy',
            'rutaEdit'      => 'backoffice_gallery.edit',
            'list'          => $gallery,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function backofficeEdit(Gallery $gallery)
    {
        $categorias = GaleriaBlog::all();
        $size = Size::all();
        $finish = Finish::all();
        $paper = Paper::all();
        return view('backoffice.galeria.list.show', [
            'page'          => 'Galería',
            'rutaIndex'    => 'backoffice_gallery.index',
            'rutaUpdate'   => 'backoffice_gallery.update',
            'row'          => $gallery,
            'categorias'    => $categorias,
            'tamanios'         => $size,
            'acabados'         => $finish,
            'papeles'         => $paper
        ]);
    }

    public function backofficeUpdate(Request $request, Gallery $gallery)
    {
        $gallery->galeria_blog_id = $request->galeria_blog_id;

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/galeria'), $imageName);
                    $gallery->image = 'assets/galeria/' . $imageName;
                } else {
                    return redirect()->route('backoffice_gallery.update')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('backoffice_gallery.update')->with('statusError', '¡Imagen no valida!');
            }
        }

        if ($request->hasFile('fondo')) {
            if ($request->file('fondo')->isValid()) {
                if (in_array($request->file('fondo')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageFondoo = time() . '.' . $request->fondo->extension();
                    $request->fondo->move(public_path('assets/galeria'), $imageFondoo);
                    $gallery->fondo = 'assets/galeria/' . $imageFondoo;
                } else {
                    return redirect()->route('backoffice_gallery.update')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('backoffice_gallery.update')->with('statusError', '¡Imagen no valida!');
            }
        }

        $gallery->size_id = $request->size_id;
        $gallery->finish_id = $request->finish_id;
        $gallery->paper_id = $request->paper_id;
        $gallery->precio = $request->precio;
        $gallery->name = $request->name;

        $gallery->save();

        return redirect()->route('backoffice_gallery.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    public function backofficeCreate()
    {
        $categorias = GaleriaBlog::all();
        $size = Size::all();
        $finish = Finish::all();
        $paper = Paper::all();
        return view('backoffice.galeria.list.create', [
            'page'          => 'Galería',
            'rutaIndex'     => 'backoffice_gallery.index',
            'rutaStore'     => 'backoffice_gallery.store',
            'categorias'    => $categorias,
            'tamanios'         => $size,
            'acabados'         => $finish,
            'papeles'         => $paper
        ]);
    }

    public function backofficeStore(StoreGalleryRequest $request)
    {
        $count = Gallery::all();
        $row = new Gallery();
        $row->galeria_blog_id = $request->galeria_blog_id;

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/galeria'), $imageName);
                    $row->image = 'assets/galeria/' . $imageName;
                } else {
                    return redirect()->route('backoffice_gallery.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('backoffice_gallery.create')->with('statusError', '¡Imagen no valida!');
            }
        }

        if ($request->hasFile('fondo')) {
            if ($request->file('fondo')->isValid()) {
                if (in_array($request->file('fondo')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageFondoo = time() . '.' . $request->fondo->extension();
                    $request->fondo->move(public_path('assets/galeria'), $imageFondoo);
                    $row->fondo = 'assets/galeria/' . $imageFondoo;
                } else {
                    return redirect()->route('backoffice_gallery.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('backoffice_gallery.create')->with('statusError', '¡Imagen no valida!');
            }
        }

        $row->size_id = $request->size_id;
        $row->finish_id = $request->finish_id;
        $row->paper_id = $request->paper_id;
        $row->precio = $request->precio;
        $row->name = $request->name;
        $row->order = count($count) + 1;


        $row->save();

        return redirect()->route('backoffice_gallery.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    public function backofficeDestroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('backoffice_gallery.index')->with('statusAlta', '¡Fila borrada de manera exitosa!');
    }

    public function moveRowGallery(Request $request)
    {
        if ($request->button == 'up') {
            $changePosition = Gallery::where('order', $request->order)->first();
            $changePosition->order = $request->order + 1;
            $changePosition->save();

            $row = Gallery::find($request->id);
            $row->order = $request->order;
            $row->save();
        } elseif ($request->button == 'down') {
            $changePosition = Gallery::where('order', $request->order)->first();
            $changePosition->order = $request->order - 1;
            $changePosition->save();

            $row = Gallery::find($request->id);
            $row->order = $request->order;
            $row->save();
        }
        return Response(['response' => $changePosition], 200);
    }

    public function sendCotizacion(Request $request)
    {
        $galeria = Gallery::where('id', $request->id)->first();
        $email = new Mail();
        // Replace the email address and name with your verified sender
        $email->setFrom(
            'contacto@neuronafotografica.com',
            'Neurona Fotográfica'
        );
        $email->setSubject('Contacto NeuronaFotográfica');
        // Replace the email address and name with your recipient
        $email->addTo(
            'rodolfoulises.ramirez@gmail.com',
            'Contacto'
        );
        $email->addContent(
            'text/html',
            '<div>
                <p>Nombre de la foto: <strong>' . $galeria->name . '</strong></p>
                <p>Tamaño: <strong>' . $galeria->size->size . '</strong></p>
                <p>Material: <strong>' . $galeria->finish->finish_es . '</strong></p>
                <p>Papel: <strong>' . $galeria->paper->paper_es . '</strong></p>
                <p>Precio mostrado al cliente: <strong>$' .  number_format($galeria->precio, 2, '.', ',') . '</strong></p>
                <h1>Datos cliente</h1>
                <p>Nombre: <strong>' . $request->name_cliente . '</strong></p>
                <p>Email: <strong>' . $request->email_cliente . '</strong></p>
            </div>'
        );
        $sendgrid = new \SendGrid('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');
        try {
            $response = $sendgrid->send($email);
            printf("Response status: %d\n\n", $response->statusCode());

            $headers = array_filter($response->headers());
            echo "Response Headers\n\n";
            foreach ($headers as $header) {
                echo '- ' . $header . "\n";
            }
        } catch (Exception $e) {
            echo 'Caught exception: ' . $e->getMessage() . "\n";
        }

        return redirect()->back()->with([
            'message' => 'Tus datos se enviaron de forma correcta, nos pondremos en contacto contigo en un lapso no mayor a 24hrs'
        ]);
    }
}
