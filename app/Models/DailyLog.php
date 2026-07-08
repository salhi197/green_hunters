<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyLog extends Model
{
    protected $fillable = [
        'user_id',
        'log_date',
        'rebalances',
        'transports',
        'battery_swaps',
        'quality_checks',
    ];

    protected $casts = [
        'log_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
