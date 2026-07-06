@extends('layouts.admin')

@section('title', 'Areas')

@section('content')

  <div class="admin-top">
    <h1>Areas</h1>
    <a href="{{ route('admin.areas.create') }}" class="btn-sm">+ New area</a>
  </div>

  <table>
    <thead>
      <tr>
        <th>Prio</th>
        <th>Name</th>
        <th>Status</th>
        <th>Vans</th>
        <th>Stops / week</th>
        <th>Coordinates</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($areas as $area)
        <tr>
          <td>{{ $area->prio }}</td>
          <td>{{ $area->name }}</td>
          <td>
            <span class="badge badge-{{ $area->status }}">
              {{ ['high' => 'High', 'mid' => 'Mid', 'open' => 'Open'][$area->status] }}
            </span>
          </td>
          <td>{{ $area->vans }}</td>
          <td>{{ $area->stops_per_week }}</td>
          <td>{{ $area->lat }}, {{ $area->lng }}</td>
          <td class="actions">
            <a href="{{ route('admin.areas.edit', $area) }}" class="btn-sm">Edit</a>
            <form method="POST" action="{{ route('admin.areas.destroy', $area) }}" onsubmit="return confirm('Delete this area?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-sm danger">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="7">No areas yet — <a href="{{ route('admin.areas.create') }}">add the first one</a>.</td>
        </tr>
      @endforelse
    </tbody>
  </table>

@endsection
