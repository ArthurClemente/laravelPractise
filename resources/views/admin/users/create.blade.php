@extends('admin.layouts.app')

@section('title', 'Create new user')

@section('content')
  <h1>New User</h1>

  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <form action={{ route('users.createNewUser') }} method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" {{ old('name') }}>
    <input type="email" name="email" placeholder="Email"{{ old('email') }}>
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Create</button>
  </form>
@endsection