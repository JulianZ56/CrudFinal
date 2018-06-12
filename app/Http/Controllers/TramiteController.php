<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Responsable;
use App\Tramite;
use Input;

class TramiteController extends Controller
{
    
    public function index()
    {
     $tramites=Tramite::orderBy('id','DESC')->paginate(3);
    return view('Tramite.index',compact('tramites'));  //
    }

    public function create()
    {
      return view ('Tramite.create');  //
    }

    public function store(Request $request)
    {
       $this->validate($request,[ 'Nombre_Tramite'=>'required', 'Descripcion_Tramite'=>'required','id_Responsable'=>'required']);
        Tramite::create($request->all());
        return redirect()->route('Tramite.index')->with('success','Registro creado satisfactoriamente');  //
    }

    
    public function show($id)
    {
       $tramites=Tramite::find($id);
      return view('Tramite.show',compact('tramites')); //
    }

    public function edit($id)
    {
      $tramite=Tramite::find($id);
    return view('Tramite.edit',compact('tramite'));  //
    }

    public function update(Request $request, $id)
    {
       $this->validate($request,['Nombre_Tramite'=>'required', 'Descripcion_Tramite'=>'required',
        'id_Responsable'=>'required']);

        Tramite::find($id)->update($request->all());
        return redirect()->route('Tramite.index')->with('success','Registro actualizado'); //
    }

    public function destroy($id)
    {
      Tramite::find($id)->delete();
      return redirect()->route('Tramite.index')->with('success','Registro Eliminado');  //
    }

    public function getTramites(){
    $tramites=Tramite::all();
    return response()->json($tramites);
}
}
