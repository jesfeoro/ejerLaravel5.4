<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movies;
class CatalogController extends Controller
{   
    //
    public function getIndex(){
        $peliculas = Movies:: all();
        return view('catalog.index', array( 'Peliculas' => $peliculas) );
//        
//        return view('catalog.index', array( 'arrayPeliculas' => $this->arrayPeliculas) );
    }
    public function getShow($id){
        $peliculas = Movies:: findOrFail($id);
        return view('catalog.show', array( 'Peliculas' => $peliculas) );
        //return view('catalog.show', array ('arrayPeliculas' => $this->arrayPeliculas[$id]));
    }
    public function getCreate(){
        return view('catalog.create');
    }
     public function getEdit($id){
         $peliculas = Movies:: findOrFail($id);
       
       return view('catalog.edit', array('Peliculas' => $peliculas));
      // return view('catalog.edit', array('id'=>$id));
    }  
    public function postCreate(Request $request) {
        $p = new Movies();
        $p->title = $request->title;
        $p->year = $request->year;
        $p->director = $request->director;
        $p->poster = $request->poster;
        $p->rented= 0;
        $p->synopsis = $request->synopsis;
      //  $p->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
       // $p->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        $p->save();
        //getIndex();
        return redirect('/catalog');
    }
    public function putEdit($id, Request $request ) {
        $p = Movies:: findOrFail($id);
        $p->title = $request->title;
        $p->year = $request->year;
        $p->director = $request->director;
        $p->poster = $request->poster;
        
        $p->synopsis = $request->synopsis;
      //  $p->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
       // $p->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        $p->save();
        return redirect('/catalog/show/'.$id);
        
    }
}
// en las plantillas blade no se pueden poner comentarios, que influyan en la plantilla (Ejemplo 
//si  comentamos codigo obsoleto que influya en el codigo nos dara error, mejor sera borralo.)