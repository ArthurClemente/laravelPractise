<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
  public function index() {
    // $user = User::first(); *first return the first element from database*
    $users = User::paginate(30); //User::all(); *all or get return all the elements from database* 

    // return view('admin/users/index', [ *return the view with the user data*
    //   'user' => $user  *the array index is the variable name to be used in the view*
    // ]);

    return view('admin/users/index', compact('users')); // compact is a helper function that creates an array with the variable name and the variable value
  }

  public function create() { // by convention, the function name must be the same as the view
    return view('admin/users/create');
  }

  public function createNewUser(CreateUserRequest $request) {
    User::create($request->all());
    return redirect()
      ->route('users.index')
      ->with('success', 'User created successfully');
  }

  public function edit(string $id) {

    // $user = USER::where('id', '=', $id)->first();
    // $user = USER::where('id', $id)->first();
    if(!$user = USER::find($id)) {
      return redirect()
        ->route('users.index')
        ->with('message', 'User not found');
    }

    return view('admin.users.edit', compact('user'));
  }

  public function updateUser(Request $request, string $id){
    
    if(!$user = USER::find($id)) {
      return back()
        ->with('message', 'User not found');
    }

    $user->update($request->only([
      'name',
      'email',
    ]));

    return redirect()
      ->route('users.index')
      ->with('success', 'User updated successfully');

  }
}
