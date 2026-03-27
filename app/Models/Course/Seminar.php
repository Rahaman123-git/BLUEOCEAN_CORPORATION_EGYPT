<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Seminar extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'course_seminars';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'slug',
        'seminar_type',
        'seminar_title_initial',
        'seminar_title',
        'seminar_location',
        'seminar_date',
        'seminar_description',
        'seminar_banner_image',
        'seminar_registration_page_banner_image'
    ];
    
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'seminar_date' => 'date',
        ];
    }

    /**
     * Get the formatted date with ordinal suffix and short year.
     *
     * Example output: 22nd May’25
     *
     * @param string $column The date attribute/column to format (default: 'seminar_date')
     * @return string
     */
    public function formattedDate($column = 'seminar_date')
    {
        $date = Carbon::parse($this->{$column});

        $day = $date->day;
        $suffix = match (true) {
            $day % 100 >= 11 && $day % 100 <= 13 => 'th',
            $day % 10 === 1 => 'st',
            $day % 10 === 2 => 'nd',
            $day % 10 === 3 => 'rd',
            default => 'th',
        };

        return $day . $suffix . ' ' . $date->format("M’y");
    }
}