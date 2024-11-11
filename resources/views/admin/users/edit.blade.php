@extends('admin.layouts.app')

@section('title', 'Edit user')

@section('content')
  <h1>Edit User</h1>

  <form action={{ route('users.updateUser', $user->id) }} method="POST">
    @csrf
    @method('put')
    <input type="text" name="name" placeholder="Name" value="{{ $user->name }}">
    <input type="email" name="email" placeholder="Email" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Edit</button>
  </form>
@endsection