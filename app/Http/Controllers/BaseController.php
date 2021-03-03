<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class BaseController extends Controller
{
  public function index() {
      $users = User::orderBy('id','ASC')->paginate(5);
      return view('layouts.app', compact('users'));
  }
}
