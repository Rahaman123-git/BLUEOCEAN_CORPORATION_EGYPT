<?php

namespace App\Models\WebsiteContent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Location extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'locations';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'location_name',
        'location_address',
        'location_landmark',
        'phone_no',
    	'email_id',
        'google_map_url',
        'image',
        'status'
    ];
}