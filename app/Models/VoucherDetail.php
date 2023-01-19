<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VoucherDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'voucher_details';

    protected $fillable  = [
        'voucher_id',
        'code',
        'used',
    ];
}
