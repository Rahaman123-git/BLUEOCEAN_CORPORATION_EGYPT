<?php

namespace App\Models\Award;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Award extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'awards';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'award_category_id',
        'title',
        'awarding_body',
        'significance',
        'impact',
        'image',
    ];

    /**
     * Define the relationship to the award with award category.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(AwardCategory::class, 'award_category_id', 'id');
    }
}