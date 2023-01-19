<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductPrice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'product_prices';

    protected $fillable  = [
        'product_detail_id',
        'portal_id',
        'price',
        'start_date',
        'end_date',
    ];
}
