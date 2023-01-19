<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'product_details';

    protected $fillable  = [
        'product_id',
        'size',
        'type',
        'status',
    ];
}
