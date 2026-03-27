<?php

namespace App\Models\Advisory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advisory extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'advisories';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'slug',
        'advisor_name',
        'designation',
        'organisation',
        'expertise',
        'contributions',
        'brief_bio',
        'details_bio',
    	'details_bio_table',
        'image',
    ];
}