<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class BaseController extends Controller
{
  public function index() {

      return view('layouts.app');
  }

  public function lista() {
      // Creo una vista di utenti in ordine decrescente dall'ultimo record aggiunto
      $users = User::orderBy('created_at','DESC')->paginate(3);
      return view('welcome', compact('users'));
  }


}
