<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Users</h1>

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
</body>
</html>