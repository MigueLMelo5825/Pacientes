<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pacientes = Paciente::all();
        return view('paciente.index')->with('pacientes',$pacientes);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pacientes = new Paciente();
        $pacientes->TipoDocu = $request->get('tipodocu');
        $pacientes->NumeDocu = $request->get('numedocu');
        $pacientes->Nombre1 = $request->get('nombre1');
        $pacientes->Nombre2 = $request->get('nombre2');
        $pacientes->Apellido1 = $request->get('apellido1');
        $pacientes->Apellido2 = $request->get('apellido2');
        $pacientes->GeneUsua = $request->get('geneusua');
        $pacientes->CodiDepa = $request->get('codidepa');
        $pacientes->CodiMuni = $request->get('codimuni');
        $pacientes->profile_photo_path = $request->get('profile_photo_path');

        $pacientes->save();

        return redirect('/paciente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($NumeDocu)
    {
        $pacientes = Paciente::find($NumeDocu);
        return view('paciente.edit')->with('pacientes',$pacientes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $NumeDocu)
    {
        $paciente =  Paciente::find($NumeDocu);
        $paciente->TipoDocu = $request->get('tipodocu');
        $paciente->NumeDocu = $request->get('numedocu');
        $paciente->Nombre1 = $request->get('nombre1');
        $paciente->Nombre2 = $request->get('nombre2');
        $paciente->Apellido1 = $request->get('apellido1');
        $paciente->Apellido2 = $request->get('apellido2');
        $paciente->GeneUsua = $request->get('geneusua');
        $paciente->CodiDepa = $request->get('codidepa');
        $paciente->CodiMuni = $request->get('codimuni');
        $paciente->profile_photo_path = $request->get('profile_photo_path');

        $paciente->save();

        return redirect('/paciente');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($NumeDocu)
    {
        $paciente = Paciente::find($NumeDocu);
        $paciente->delete();
        return redirect('/paciente');
    }
}
