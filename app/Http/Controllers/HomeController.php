<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//            return view('/catalog');
//        
//    }
    public function getHome() {
       if (Auth::check()) {
        // El usuario está correctamente autenticado
            return redirect()->action('CatalogController@getIndex');
        }else{
         // Sino lo mandamos a login
            return view('login');
        } 
    }
}
