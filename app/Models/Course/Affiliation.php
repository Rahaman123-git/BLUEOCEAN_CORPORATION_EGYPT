<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Affiliation extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'course_affiliations';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'short_name_en',
        'name_en',
        'description_en',
        'course_description_en',
        'affiliation_text_bg_color_code',
        'image',
    ];

    /**
     * Get a shortened version of the description.
     *
     * This method removes HTML tags from the description and limits the 
     * text to a specified length, appending '...' if it exceeds the limit.
     *
     * @param string $language On which language need the short description.
     * @param int $length The number of characters to limit the description to. Default is 100.
     * @return string The truncated description.
     */
    public function getShortDescription($language = 'en', $length = 50)
    {
        if($language == 'en'){
            return Str::limit(strip_tags($this->description_en), $length, '...');
        }else{
            return Str::limit(strip_tags($this->description_ar), $length, '...');
        }
    }

    /**
     * Get all courses related to a affliation.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany(Course::class, 'course_affiliation_id', 'id');
    }
}