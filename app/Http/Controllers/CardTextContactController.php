<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCardTextContactRequest;
use App\Http\Requests\UpdateCardTextContactRequest;
use App\Models\CardTextContact;
use Illuminate\Http\Request;

class CardTextContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cardText = CardTextContact::orderBy('order', 'asc')->get();
        return view('backoffice.contacto.card_text.index', [
            'cardText' => $cardText,
            'page'  => 'Tarjeta de texto',
            'rutaCreate'    => 'card_text_contact.create',
            'rutaDestroy'    => 'card_text_contact.destroy',
            'rutaEdit'    => 'card_text_contact.edit',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.contacto.card_text.create', [
            'page'  => 'Tarjeta de texto',
            'rutaIndex'    => 'card_text_contact.index',
            'rutaStore'    => 'card_text_contact.store',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCardTextContactRequest $request)
    {
        $row = new CardTextContact;
        $cards = CardTextContact::all();
        $row->description_es = $request->description_es;
        $row->name_es = $request->name_es;
        $row->ocupacion_es = $request->ocupacion_es;
        $row->description_en = $request->description_en;
        $row->name_en = $request->name_en;
        $row->ocupacion_en = $request->ocupacion_en;
        $row->order = count($cards) + 1;
        $row->save();

        return redirect()->route('card_text_contact.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CardTextContact $card_text_contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CardTextContact $card_text_contact)
    {
        return view('backoffice.contacto.card_text.show', [
            'row'           => $card_text_contact,
            'page'          => 'Tarjeta de texto',
            'rutaIndex'     => 'card_text_contact.index',
            'rutaUpdate'    => 'card_text_contact.update',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCardTextContactRequest $request, CardTextContact $card_text_contact)
    {
        $card_text_contact->description_es = $request->description_es;
        $card_text_contact->name_es = $request->name_es;
        $card_text_contact->ocupacion_es = $request->ocupacion_es;
        $card_text_contact->description_en = $request->description_en;
        $card_text_contact->name_en = $request->name_en;
        $card_text_contact->ocupacion_en = $request->ocupacion_en;

        $card_text_contact->save();

        return redirect()->route('card_text_contact.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CardTextContact $card_text_contact)
    {
        $card_text_contact->delete();
        return redirect()->route('card_text_contact.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }

    public function moveCardTextContact(Request $request)
    {

        if ($request->button == 'up') {
            $changePosition = CardTextContact::where('order', $request->order)->first();
            $changePosition->order = $request->order + 1;
            $changePosition->save();

            $row = CardTextContact::find($request->id);
            $row->order = $request->order;
            $row->save();
        } elseif ($request->button == 'down') {
            $changePosition = CardTextContact::where('order', $request->order)->first();
            $changePosition->order = $request->order - 1;
            $changePosition->save();

            $row = CardTextContact::find($request->id);
            $row->order = $request->order;
            $row->save();
        }
        return Response(['response' => $changePosition], 200);
    }
}
