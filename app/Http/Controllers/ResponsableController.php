<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Responsable;
use App\Tramite;
use Input;

class ResponsableController extends Controller
{
    
    public function index()
    {
     $responsables=Responsable::orderBy('id','DESC')->paginate(3);
    return view('Responsable.index',compact('responsables'));  //
    }

    public function create()
    {
    return view ('Responsable.create');
    }

      
    public function show($id)
    {
      $responsables=Responsable::find($id);
        return view('Responsable.show',compact('responsables'));  //
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,['Nombre_ResponsableT'=>'required', 'Telefono'=>'required',
        'Cargo'=>'required']);

        responsable::find($id)->update($request->all());
        return redirect()->route('Responsable.index')->with('success','Registro actualizado');
 //
    }
      public function edit($id)
    {
    $responsable=Responsable::find($id);
    return view('Responsable.edit',compact('responsable'));
    }


    public function destroy($id)
    {
       Responsable::find($id)->delete();
      return redirect()->route('Responsable.index')->with('success','Registro Eliminado'); //
    }

    public function store(Request $request)
    {

        $this->validate($request,[ 'Nombre_ResponsableT'=>'required', 'Telefono'=>'required','Cargo'=>'required']);
        Responsable::create($request->all());
        return redirect()->route('Responsable.index')->with('success','Registro creado satisfactoriamente');
 //
    }

    public function getResponsables(){
    $responsables=Responsable::all();
    return response()->json($responsables);
}
}
