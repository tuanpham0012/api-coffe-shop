<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Table extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tables';

    protected $fillable  = [
        'name',
        'zone_id',
        'floor_id',
        'portal_id',
        'position',
        'card_number',
        'width',
        'height',
        'top',
        'left',
    ];
}
