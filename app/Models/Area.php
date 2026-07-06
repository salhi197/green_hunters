<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'name',
        'prio',
        'lat',
        'lng',
        'vans',
        'stops_per_week',
        'status',
    ];
}
