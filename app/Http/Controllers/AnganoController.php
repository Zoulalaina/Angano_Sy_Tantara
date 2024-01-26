<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angano;

class AnganoController extends Controller
{
    //
    public function create(){
        return view('ajouter');
    }
    public function store(Request $request){
        $angano = new Angano();
        $angano->name=$request->input('name');
        $angano->email=$request->input('email');
        $angano->titre=$request->input('titre');
        $angano->lettre=$request->input('lettre');
        $angano->save();

       // return response()->json(['message'=>'Angano ajouté avec succés']);
        return redirect()->route('create')->with('success','Angano ajouté avec succés');



    }
    public function listeAngano()
    {
        $anganos = Angano::orderBy('titre', 'desc')->paginate(5);
        return view('listeAngano')->with('anganos',$anganos); 
    }
    public function supprime($id)
    {
        $angano=Angano::find($id);
        $angano->delete();
        //return response()->json(['message'=>'Angano ajouté avec succés']);
        return redirect()->route('listeAngano')->with('success','Angano supprimé avec succés');
    }
    
}
