<?php

namespace App\Models\WebsiteContent;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageSetting extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'page_settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'page_type',
        'page_title',
        'meta_details',
        'page_schema',
        'media_type',
        'banner_file'
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
            return Str::limit(strip_tags($this->meta_details), $length, '...');
        }else{
            return Str::limit(strip_tags($this->meta_details), $length, '...');
        }
    }
}