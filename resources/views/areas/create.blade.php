@extends('layouts.admin')

@section('title', 'New Area')

@section('content')

  <div class="admin-top">
    <h1>New Area</h1>
    <a href="{{ route('admin.areas.index') }}" class="btn-sm">← Back to areas</a>
  </div>

  <form method="POST" action="{{ route('admin.areas.store') }}" class="admin-form">
    @include('areas._form')
  </form>

@endsection
