@extends('layouts.admin')

@section('title', 'Log History')

@section('content')

  <div class="admin-top">
    <h1>Daily Log History</h1>
    <a href="{{ route('admin.logs.entry') }}" class="btn-sm">+ Enter today</a>
  </div>

  <table>
    <thead>
      <tr>
        <th>Date</th>
        <th>Rebalances</th>
        <th>Transport</th>
        <th>Battery swap</th>
        <th>Quality check</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($days as $day)
        <tr>
          <td>{{ \Carbon\Carbon::parse($day->log_date)->format('d M Y') }}</td>
          <td>{{ $day->rebalances }}</td>
          <td>{{ $day->transports }}</td>
          <td>{{ $day->battery_swaps }}</td>
          <td>{{ $day->quality_checks }}</td>
          <td class="actions">
            <a href="{{ route('admin.logs.entry', ['date' => \Carbon\Carbon::parse($day->log_date)->toDateString()]) }}" class="btn-sm">View / Edit</a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="6">No entries yet — <a href="{{ route('admin.logs.entry') }}">log today's numbers</a>.</td>
        </tr>
      @endforelse
    </tbody>
  </table>

@endsection
