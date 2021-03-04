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
      $users = User::orderBy('id','ASC')->paginate(3);
      return view('welcome', compact('users'));
  }

  public function home() {
      $users = User::orderBy('id','ASC')->paginate(3);
      return view('home', compact('users'));
  }
}
