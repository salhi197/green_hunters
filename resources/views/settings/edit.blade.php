@extends('layouts.admin')

@section('title', 'Settings')

@section('content')

  <div class="admin-top">
    <h1>Settings</h1>
  </div>

  <form method="POST" action="{{ route('admin.settings.update') }}" class="admin-form">
    @csrf
    @method('PUT')

    <div class="field">
      <label for="name">Name</label>
      <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required>
      @error('name') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div class="field">
      <label for="email">Email</label>
      <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required>
      @error('email') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div class="field">
      <label for="password">New password <span style="text-transform:none;">(leave blank to keep current)</span></label>
      <input id="password" name="password" type="password">
      @error('password') <div class="error">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="submit-btn">Save settings</button>
  </form>

@endsection
