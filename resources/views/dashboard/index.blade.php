@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

  <div class="admin-top">
    <h1>Dashboard</h1>
  </div>

  <div style="display:grid; grid-template-columns:repeat(4, 1fr); gap:2px; background:var(--ink); border:2px solid var(--ink); margin-bottom:32px;">
    <div style="background:var(--white); padding:20px;">
      <div style="font-family:var(--display); font-size:36px; color:var(--amber-dim);">{{ $areaCount }}</div>
      <div style="font-family:var(--mono); font-size:12px; text-transform:uppercase; color:var(--steel); margin-top:6px;">Areas</div>
    </div>
    <div style="background:var(--white); padding:20px;">
      <div style="font-family:var(--display); font-size:36px; color:var(--amber-dim);">{{ $userCount }}</div>
      <div style="font-family:var(--mono); font-size:12px; text-transform:uppercase; color:var(--steel); margin-top:6px;">Users</div>
    </div>
    <div style="background:var(--white); padding:20px;">
      <div style="font-family:var(--display); font-size:36px; color:var(--green-dim);">{{ $today->rebalances ?? 0 }}</div>
      <div style="font-family:var(--mono); font-size:12px; text-transform:uppercase; color:var(--steel); margin-top:6px;">Rebalances today</div>
    </div>
    <div style="background:var(--white); padding:20px;">
      <div style="font-family:var(--display); font-size:36px; color:var(--green-dim);">{{ $today->battery_swaps ?? 0 }}</div>
      <div style="font-family:var(--mono); font-size:12px; text-transform:uppercase; color:var(--steel); margin-top:6px;">Battery swaps today</div>
    </div>
  </div>

  <div class="admin-top">
    <h1 style="font-size:22px;">Recent days</h1>
    <a href="{{ route('admin.logs.index') }}" class="btn-sm">Full history</a>
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
      @forelse ($recentLogs as $day)
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
