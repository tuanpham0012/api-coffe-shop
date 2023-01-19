<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerType extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'customer_types';

    protected $fillable  = [
        'code',
        'name',
        'quota_point',
        'status',
    ];
}
