@extends('layouts.admin')

@section('title', 'Edit User')

@section('content')

  <div class="admin-top">
    <h1>Edit User — {{ $user->name }}</h1>
    <a href="{{ route('admin.users.index') }}" class="btn-sm">← Back to users</a>
  </div>

  <form method="POST" action="{{ route('admin.users.update', $user) }}" class="admin-form">
    @include('users._form')
  </form>

@endsection
