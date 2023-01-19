<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zone extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'zones';

    protected $fillable  = [
        'portal_id',
        'code',
        'description',
        'status',
    ];
}
