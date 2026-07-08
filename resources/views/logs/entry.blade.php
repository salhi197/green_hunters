@extends('layouts.admin')

@section('title', 'Daily Log')

@section('content')

  <div class="admin-top">
    <h1>Daily Log — {{ \Carbon\Carbon::parse($date)->format('l, d M Y') }}</h1>
    <a href="{{ route('admin.logs.index') }}" class="btn-sm">View history</a>
  </div>

  <form method="GET" action="{{ route('admin.logs.entry') }}" style="margin-bottom:20px; display:flex; gap:10px; align-items:end;">
    <div class="field" style="margin-bottom:0;">
      <label for="date">Date</label>
      <input id="date" name="date" type="date" value="{{ $date }}" onchange="this.form.submit()">
    </div>
  </form>

  <form method="POST" action="{{ route('admin.logs.save') }}">
    @csrf
    <input type="hidden" name="date" value="{{ $date }}">

    <table>
      <thead>
        <tr>
          <th>User</th>
          <th>Rebalances</th>
          <th>Transport</th>
          <th>Battery swap</th>
          <th>Quality check</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($users as $user)
          @php $log = $existing->get($user->id); @endphp
          <tr>
            <td>{{ $user->name }}</td>
            <td>
              <input type="number" min="0" name="entries[{{ $user->id }}][rebalances]"
                     value="{{ old('entries.' . $user->id . '.rebalances', $log->rebalances ?? 0) }}"
                     style="width:90px; padding:8px 10px; border:2px solid var(--ink);">
            </td>
            <td>
              <input type="number" min="0" name="entries[{{ $user->id }}][transports]"
                     value="{{ old('entries.' . $user->id . '.transports', $log->transports ?? 0) }}"
                     style="width:90px; padding:8px 10px; border:2px solid var(--ink);">
            </td>
            <td>
              <input type="number" min="0" name="entries[{{ $user->id }}][battery_swaps]"
                     value="{{ old('entries.' . $user->id . '.battery_swaps', $log->battery_swaps ?? 0) }}"
                     style="width:90px; padding:8px 10px; border:2px solid var(--ink);">
            </td>
            <td>
              <input type="number" min="0" name="entries[{{ $user->id }}][quality_checks]"
                     value="{{ old('entries.' . $user->id . '.quality_checks', $log->quality_checks ?? 0) }}"
                     style="width:90px; padding:8px 10px; border:2px solid var(--ink);">
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5">No users yet — <a href="{{ route('admin.users.create') }}">add one first</a>.</td>
          </tr>
        @endforelse
      </tbody>
    </table>

    @if ($users->isNotEmpty())
      <button type="submit" class="submit-btn" style="margin-top:20px;">Save entries for this day</button>
    @endif
  </form>

@endsection
