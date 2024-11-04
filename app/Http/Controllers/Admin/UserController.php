<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
  public function index() {
    $user = User::first(); // first return the first element from database
    // return view('admin/users/index', [ // return the view with the user data
    //   'user' => $user // the array index is the variable name to be used in the view
    // ]);
    return view('admin/users/index', compact('user')); // compact is a helper function that creates an array with the variable name and the variable value
  }
}
