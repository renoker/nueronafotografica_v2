<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCardTextAcercaDeRequest;
use App\Http\Requests\UpdateCardTextAcercaDeRequest;
use App\Models\CardTextAcercaDe;
use Illuminate\Http\Request;

class CardTextAcercaDeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cardText = CardTextAcercaDe::orderBy('order', 'asc')->get();
        return view('backoffice.acerca_de.card_text.index', [
            'cardText' => $cardText,
            'page'  => 'Tarjeta de texto',
            'rutaCreate'    => 'card_text.create',
            'rutaDestroy'    => 'card_text.destroy',
            'rutaEdit'    => 'card_text.edit',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.acerca_de.card_text.create', [
            'page'  => 'Tarjeta de texto',
            'rutaIndex'    => 'card_text.index',
            'rutaStore'    => 'card_text.store',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCardTextAcercaDeRequest $request)
    {
        $row = new CardTextAcercaDe;
        $cards = CardTextAcercaDe::all();
        $row->description_es = $request->description_es;
        $row->name_es = $request->name_es;
        $row->ocupacion_es = $request->ocupacion_es;
        $row->description_en = $request->description_en;
        $row->name_en = $request->name_en;
        $row->ocupacion_en = $request->ocupacion_en;
        $row->order = count($cards) + 1;
        $row->save();

        return redirect()->route('card_text.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CardTextAcercaDe $card_text)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CardTextAcercaDe $card_text)
    {
        return view('backoffice.acerca_de.card_text.show', [
            'row'           => $card_text,
            'page'          => 'Tarjeta de texto',
            'rutaIndex'     => 'card_text.index',
            'rutaUpdate'    => 'card_text.update',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCardTextAcercaDeRequest $request, CardTextAcercaDe $card_text)
    {
        $card_text->description_es = $request->description_es;
        $card_text->name_es = $request->name_es;
        $card_text->ocupacion_es = $request->ocupacion_es;
        $card_text->description_en = $request->description_en;
        $card_text->name_en = $request->name_en;
        $card_text->ocupacion_en = $request->ocupacion_en;

        $card_text->save();

        return redirect()->route('card_text.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CardTextAcercaDe $card_text)
    {
        $card_text->delete();
        return redirect()->route('card_text.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }

    public function moveCardText(Request $request)
    {

        if ($request->button == 'up') {
            $changePosition = CardTextAcercaDe::where('order', $request->order)->first();
            $changePosition->order = $request->order + 1;
            $changePosition->save();

            $row = CardTextAcercaDe::find($request->id);
            $row->order = $request->order;
            $row->save();
        } elseif ($request->button == 'down') {
            $changePosition = CardTextAcercaDe::where('order', $request->order)->first();
            $changePosition->order = $request->order - 1;
            $changePosition->save();

            $row = CardTextAcercaDe::find($request->id);
            $row->order = $request->order;
            $row->save();
        }
        return Response(['response' => $changePosition], 200);
    }
}
