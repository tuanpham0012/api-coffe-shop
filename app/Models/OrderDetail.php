<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'order_details';

    protected $fillable  = [
        'order_id',
        'product_detail_id',
        'quantity',
        'price',
        'total_price',
    ];
}
