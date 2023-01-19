<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductGroup extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'product_groups';

    protected $fillable  = [
        'code',
        'name',
        'color',
        'status',
        'level',
        'parent_id',
    ];
}
