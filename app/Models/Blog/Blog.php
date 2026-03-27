<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Blog extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blogs';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'blog_type',
        'slug',
        'blog_title',
        'blog_short_description',
        'blog_thumb_image',
        'introduction_title',
        'introduction_details',
        'introduction_image',
        'introduction_video_title',
        'introduction_video_url',
        'banner_images',
        'highlighted_images',
        'blog_details'
    ];
}