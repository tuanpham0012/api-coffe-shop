<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'customers';

    protected $fillable  = [
        'name',
        'email',
        'phone_number',
        'customer_type_id',
        'point',
    ];
}
