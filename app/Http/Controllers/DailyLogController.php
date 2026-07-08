<?php

namespace App\Http\Controllers;

use App\Models\DailyLog;
use App\Models\User;
use Illuminate\Http\Request;

class DailyLogController extends Controller
{
    /**
     * List of past days with totals, most recent first.
     */
    public function index()
    {
        $days = DailyLog::selectRaw('
                log_date,
                SUM(rebalances) as rebalances,
                SUM(transports) as transports,
                SUM(battery_swaps) as battery_swaps,
                SUM(quality_checks) as quality_checks
            ')
            ->groupBy('log_date')
            ->orderByDesc('log_date')
            ->get();

        return view('logs.index', compact('days'));
    }

    /**
     * Entry form for a single day — one row per user.
     */
    public function entry(Request $request)
    {
        $date = $request->query('date', now()->toDateString());

        $users = User::orderBy('name')->get();

        $existing = DailyLog::whereDate('log_date', $date)
            ->get()
            ->keyBy('user_id');

        return view('logs.entry', compact('date', 'users', 'existing'));
    }

    /**
     * Save (create or update) every user's entry for the given date.
     */
    public function save(Request $request)
    {
        $validated = $request->validate([
            'date'                          => ['required', 'date'],
            'entries'                       => ['required', 'array'],
            'entries.*.rebalances'          => ['nullable', 'integer', 'min:0'],
            'entries.*.transports'          => ['nullable', 'integer', 'min:0'],
            'entries.*.battery_swaps'       => ['nullable', 'integer', 'min:0'],
            'entries.*.quality_checks'      => ['nullable', 'integer', 'min:0'],
        ]);

        foreach ($validated['entries'] as $userId => $entry) {
            DailyLog::updateOrCreate(
                ['user_id' => $userId, 'log_date' => $validated['date']],
                [
                    'rebalances'     => $entry['rebalances'] ?? 0,
                    'transports'     => $entry['transports'] ?? 0,
                    'battery_swaps'  => $entry['battery_swaps'] ?? 0,
                    'quality_checks' => $entry['quality_checks'] ?? 0,
                ]
            );
        }

        return redirect()
            ->route('admin.logs.entry', ['date' => $validated['date']])
            ->with('success', 'Saved entries for ' . $validated['date'] . '.');
    }
}
