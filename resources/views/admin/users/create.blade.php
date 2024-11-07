@extends('admin.layouts.app')

@section('title', 'Create new user')

@section('content')
  <form action={{ route('users.createNewUser') }} method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Create</button>
  </form>
@endsection