<?php

namespace App\Http\Controllers;
use DB;
use App\Estudiante;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Estudiantes = DB::table('Estudiantes')->get();
        return view('Inicio.consulta',['Estudiantes' => $Estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $Estudiante = new Estudiante();
            $Estudiante->Matricula=$request->input('Matricula');
            $Estudiante->Nombre=$request->input('Nombre');
            $Estudiante->Apellido=$request->input('Apellido');
            $Estudiante->Edad=$request->input('Edad');
            $Estudiante->save();
            return back()->with('Mensajes','Estudiante creado con exito');
        }
        catch(Exception $e){
            return 'Error: '. $e;
        }
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Eliminado el '. $id;

        DB::delete('delete Estudiantes where name = ?', $id);
        return 'Eliminado el '. $id;
    }
}
