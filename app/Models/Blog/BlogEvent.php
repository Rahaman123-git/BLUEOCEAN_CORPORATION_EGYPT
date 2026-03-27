<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class BlogEvent extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_events';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'blog_id',
        'event_title',
        'is_highlighted_event',
        'event_short_description',
        'event_thumb_image',
        'event_details',
        'introduction_details',
        'event_highlighted_details',
        'banner_images',
        'event_images',
        'banner_images',
        'reel_video_title',
        'reel_video_url',
        'video_blog_urls'
    ];

    /**
     * Define the relationship to the course with course category.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }
}