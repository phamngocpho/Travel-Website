<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourSchedule extends Model
{
    protected $primaryKey = 'schedule_id';
    protected $fillable = [
        'tour_id',
        'price_list_id',
        'departure_date',
        'return_date',
        'available_slots',
        'status',
        'meeting_point',
        'meeting_time'
    ];
}
