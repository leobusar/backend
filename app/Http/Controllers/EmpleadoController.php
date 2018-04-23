<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleados = Empleado::orderBy('nombre', "ASC")->paginate(10);
        return view("empleado.index",compact("empleados"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("empleado.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         request()->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'documento' => 'required',
            'fecha_nac' => 'required'
        ]);


        Empleado::create($request->all());


        return redirect()->route('empleado.index')
                        ->with('success','Empleado ha sido creado.');       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
        return view("empleado.show",compact("empleado"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view("empleado.edit",compact("empleado"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        request()->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'documento' => 'required',
            'fecha_nac' => 'required'
        ]);

        $empleado->update($request->all());

        return redirect()->route('empleado.show', $empleado->id)
                        ->with('success','Empleado actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
        $empleado->delete();

        return redirect()->route('empleado.index')
                        ->with('success','Empleado eliminado exitosamente');
    }
}
