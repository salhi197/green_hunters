@extends('layouts.admin')

@section('title', 'Users')

@section('content')

  <div class="admin-top">
    <h1>Users</h1>
    <a href="{{ route('admin.users.create') }}" class="btn-sm">+ New user</a>
  </div>

  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Joined</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->created_at->format('d M Y') }}</td>
          <td class="actions">
            <a href="{{ route('admin.users.edit', $user) }}" class="btn-sm">Edit</a>
            <form method="POST" action="{{ route('admin.users.destroy', $user) }}" onsubmit="return confirm('Delete this user?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-sm danger">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4">No users yet — <a href="{{ route('admin.users.create') }}">add the first one</a>.</td>
        </tr>
      @endforelse
    </tbody>
  </table>

@endsection
