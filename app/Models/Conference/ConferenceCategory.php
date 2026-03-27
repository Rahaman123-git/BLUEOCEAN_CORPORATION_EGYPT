<?php

namespace App\Models\Conference;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ConferenceCategory extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'conference_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'category_short_title',
        'category_title',
        'category_logo',
        'category_banner',
        'category_details'
    ];

    /**
     * Custom accessor to format the date when retrieving
     */
    public function getEventDateAttribute($value)
    {
        return Carbon::parse($value)->format('d.m.Y');
    }
}