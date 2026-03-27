<?php

namespace App\Models\Conference;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Conference extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'conferences';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'event_category',
        'event_title',
        'slug',
        'event_logo',
        'first_line_text_beside_logo',
        'second_line_text_beside_logo',
        'banner_file',
        'home_page_banner_file',
        'event_category_page_banner_file',
        'summary_text_beside_logo',
        'event_hotel_name',
        'event_location',
        'event_hotel_image',
        'event_date',
        'first_line_text_beside_event_hotel_image',
        'second_line_text_beside_event_hotel_image',
        'no_of_delegates',
        'no_of_organizations',
        'no_of_speakers',
        'participan_sectors',
        'conference_opportunities',
        'sponsor_advantages',
        'individual_award_categories',
        'organization_award_categories',
        'registration_fees',
        'registration_url'
    ];

    /**
     * Custom accessor to format the date when retrieving
     */
    public function getEventDateAttribute($value)
    {
        return Carbon::parse($value)->format('d.m.Y');
    }
}