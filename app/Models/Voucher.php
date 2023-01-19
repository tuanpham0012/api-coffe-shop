<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voucher extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'vouchers';

    protected $fillable  = [
        'portal_id',
        'code',
        'description',
        'start_date',
        'end_date',
        'quantity',
        'quantity_used',
        'type',
        'limit_use',
        'percent_discount',
        'price_discount',
    ];
}
