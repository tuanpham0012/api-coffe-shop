<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentMethod extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'payment_methods';

    protected $fillable  = [
        'code',
        'name',
        'status',
    ];
}
