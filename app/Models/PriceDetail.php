<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceDetail extends Model
{
    protected $primaryKey = 'price_detail_id';
    protected $fillable = [
        'price_list_id',
        'customer_type',
        'price',
        'note'
    ];

    public function priceList()
    {
        return $this->belongsTo(PriceList::class, 'price_list_id', 'price_list_id');
    }
}