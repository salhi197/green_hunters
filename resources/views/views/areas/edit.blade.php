@extends('layouts.admin')

@section('title', 'Edit Area')

@section('content')

  <div class="admin-top">
    <h1>Edit Area — {{ $area->name }}</h1>
    <a href="{{ route('admin.areas.index') }}" class="btn-sm">← Back to areas</a>
  </div>

  <form method="POST" action="{{ route('admin.areas.update', $area) }}" class="admin-form">
    @include('areas._form')
  </form>

@endsection
