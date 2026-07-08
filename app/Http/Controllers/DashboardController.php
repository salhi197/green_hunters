<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\DailyLog;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $areaCount = Area::count();
        $userCount = User::count();

        $today = DailyLog::whereDate('log_date', now()->toDateString())
            ->selectRaw('
                SUM(rebalances) as rebalances,
                SUM(transports) as transports,
                SUM(battery_swaps) as battery_swaps,
                SUM(quality_checks) as quality_checks
            ')
            ->first();

        $recentLogs = DailyLog::selectRaw('log_date, SUM(rebalances) as rebalances, SUM(transports) as transports, SUM(battery_swaps) as battery_swaps, SUM(quality_checks) as quality_checks')
            ->groupBy('log_date')
            ->orderByDesc('log_date')
            ->limit(5)
            ->get();

        return view('dashboard.index', compact('areaCount', 'userCount', 'today', 'recentLogs'));
    }
}
