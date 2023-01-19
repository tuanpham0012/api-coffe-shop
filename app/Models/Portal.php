<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'portals';

    protected $fillable = [
        'name',
        'code',
        'tax_code',
        'city_id',
        'district_id',
        'ward_id',
        'address',
        'phone_number',
        'website',
        'start_time',
        'end_time',
        'morning_start',
        'morning_end',
        'afternoon_start',
        'afternoon_end',
        'night_start',
        'night_end',
        'start_date',
    ];

    /**
     * Get the city that owns the Portal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Get the district that owns the Portal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    /**
     * Get the ward that owns the Portal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    public function formatData($request)
    {
        return $request;
    }
}
