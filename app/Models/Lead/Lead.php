<?php

namespace App\Models\Lead;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Course\Course;

class Lead extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'leads';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'token',
        'lead_source',
        'lead_source_id',
        'first_name',
        'last_name',
        'email',
        'phone_no',
        'city',
        'country',
        'website',
        'designation',
        'news_letter',
        'status'
    ];

    /**
     * Define the relationship to the course with course category.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo(Course::class, 'lead_source_id', 'id');
    }
}