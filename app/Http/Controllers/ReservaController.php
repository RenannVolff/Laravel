<?php

namespace App\Http\Controllers;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reserva::with('sala')->get();
        return view('reservas.index', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($salaId)
    {
        return view('reservas.create', ['salaId' => $salaId]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['sala_id' => 'required']);
        $request->validate(['usuario' => 'required']);
        $request->validate(['data' => 'required']);
        $request->validate(['horario' => 'required']);
        Reserva::create($request->all());
        return redirect()->route('reservas.index')->with('success', 'Reserva criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        return view('reservas.show', compact('reserva'));
    }

}
