<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Course extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'courses';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'zoho_id',
        'slug',
        'course_type',
        'course_short_title_en',
        'course_title_en',
        'course_category_id',
        'course_affiliation_id',
        'course_language',
        'course_traning_location',
        'course_image',
        'course_brochure',
        // 'course_price',
        'course_methodology_en',
        'course_objectives_en',
        'course_target_audience_en',
        'course_target_competencies_en',
        'course_meta_details',
        'course_schema'
    ];

    /**
     * Define the relationship to the course with course category.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'course_category_id', 'id');
    }

    /**
     * Define the relationship to the course with course affiliation.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function affiliation()
    {
        return $this->belongsTo(Affiliation::class, 'course_affiliation_id', 'id');
    }

    /**
     * Define the relationship to the course with course module.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function module()
    {
        return $this->hasOne(CourseModule::class, 'course_id', 'id');
    }

    /**
     * Get all schedules related to the course.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schedules()
    {
        return $this->hasMany(CourseSchedule::class);
    }

    /**
     * Get the nearest schedule (past or future) for the course.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nearestSchedule()
    {
        return $this->hasOne(CourseSchedule::class)
                    ->orderByRaw('ABS(DATEDIFF(course_start_date, CURDATE()))') // Closest date
                    ->orderBy('course_start_date', 'asc');
    }

    /**
     * Get the next upcoming schedule for the course.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nextSchedule()
    {
        return $this->hasOne(CourseSchedule::class)
                    ->where('course_start_date', '>=', now())
                    ->orderBy('course_start_date', 'asc');
    }
}