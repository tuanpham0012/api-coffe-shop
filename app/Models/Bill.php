<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bill extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'banks';

    protected $fillable = [
        'portal_id',
        'table_id',
        'customer_id',
        'order_id',
        'voucher_id',
        'voucher_code',
        'code',
        'note',
        'total_price',
        'percent_surcharge',
        'price_surcharge',
        'percent_discount',
        'price_discount',
        'price_after_discount',
        'tax_code',
        'tax',
        'fee',
        'tax_amount',
        'fee_amount',
        'price_before_tax',
        'status',
    ];
}
