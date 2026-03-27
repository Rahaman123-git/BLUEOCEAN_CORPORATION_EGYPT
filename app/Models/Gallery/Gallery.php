<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'galleries';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'media_type',
        'page_type',
        'conference_id',
        'photo_year',
        'video_year',
        'photo_title',
        'video_title',
        'image',
        'video_url',
        'video_thumb_image'
    ];
}