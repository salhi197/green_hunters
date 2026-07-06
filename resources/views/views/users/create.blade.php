@extends('layouts.admin')

@section('title', 'New User')

@section('content')

  <div class="admin-top">
    <h1>New User</h1>
    <a href="{{ route('admin.users.index') }}" class="btn-sm">← Back to users</a>
  </div>

  <form method="POST" action="{{ route('admin.users.store') }}" class="admin-form">
    @include('users._form')
  </form>

@endsection
