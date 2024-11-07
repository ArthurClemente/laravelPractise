@extends('admin.layouts.app')

@section('title', 'Users list')

@section('content')
<h1>Users</h1>

  <a href={{ route('users.create') }}>New user</a>

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
          <td>-</td>
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