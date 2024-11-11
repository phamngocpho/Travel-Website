<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourImage extends Model
{
    protected $primaryKey = 'image_id';
    protected $fillable = [
        'tour_id',
        'image_url',
        'is_main'
    ];
}
