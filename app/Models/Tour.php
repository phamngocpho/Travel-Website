<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $primaryKey = 'tour_id';
    protected $fillable = [
        'tour_name',
        'description',
        'duration_days',
        'max_participants',
        'category',
        'transportation',
        'include_hotel',
        'include_meal',
        'highlight_places',
        'is_active',
        'location_id'
    ];
}
