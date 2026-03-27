<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Event extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name_en',
        'name_ar',
        'location_en',
        'location_ar',
        'date_time',
        'registration_link',
        'description_en',
        'description_ar',
        'image',
        'status'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'date_time' => 'datetime',
        ];
    }

    /**
     * Custom accessor to format the datetime when retrieving
     */
    public function getDateTimeAttribute($value)
    {
        return Carbon::parse($value)->setTimezone('Asia/Kolkata')->format('d.m.Y H:i');
    }
}