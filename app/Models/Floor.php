<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Floor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'floors';

    protected $fillable  = [
        'code',
        'name',
        'position',
        'zone_id',
        'note',
        'status',
    ];
}
