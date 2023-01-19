<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';

    protected $fillable  = [
        'product_group_id',
        'code',
        'name',
        'barcode',
        'status',
        'image',
        'unit_root_id',
        'unit_conversion_1_id',
        'quantity_conversion_1',
        'unit_conversion_2_id',
        'quantity_conversion_2',
    ];
}
