@extends('admin.layouts.app')

@section('title', 'Users list')

@section('content')
  <h1>Users</h1>

  <a href={{ route('users.create') }}>New user</a>

  @if(session()->has('success'))
    {{ session('success') }}
  @endif
  
  @if(session()->has('message'))
    {{ session('message') }}
  @endif

  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            <a href={{ route('users.edit', $user->id) }}>Edit</a>
          </td>
        </tr>
      @empty <!-- if the users collections is empty -->
        <tr>
          <td colspan="100">Database is empty!!</td>
        </tr>
      @endforelse
    </tbody>
  </table>

  {{ $users->links() }}
@endsection