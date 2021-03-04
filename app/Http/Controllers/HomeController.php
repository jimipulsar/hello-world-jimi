<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      // Creo una vista di utenti in ordine decrescente dall'ultimo record aggiunto
      $users = User::orderBy('created_at','DESC')->paginate(3);
      return view('home', compact('users'));
    }
}
