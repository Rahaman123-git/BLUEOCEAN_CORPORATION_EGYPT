<?php

namespace App\Models\Consulting;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Consulting extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'consulting';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'consulting_company_id',
        'consulting_title',
        'slug',
        'challenge',
        'highlighted_summary',
        'highlighted_issue',
        'boc_engagement_approach',
        'solutions_designed_delivered',
        'business_impact_delivered',
        'key_learnings_recommendations',
        'why_boc',
        'case_study_banner_image',
        'case_study_image',
        'case_study_thumb_image',
        'case_study_file'
    ];

    /**
     * Define the relationship to the consulting case studies with consulting company.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consultingCompany()
    {
        return $this->belongsTo(ConsultingCompany::class, 'consulting_company_id', 'id');
    }

    /**
     * Get a shortened version of the challenge.
     *
     * This method removes HTML tags from the description and limits the 
     * text to a specified length, appending '...' if it exceeds the limit.
     *
     * @param int $length The number of characters to limit the description to. Default is 100.
     * @return string The truncated description.
     */
    public function getShortChallenge($length = 50)
    {
        return Str::limit(strip_tags($this->challenge), $length, '...');
    }

    /**
     * Get a shortened version of the highlighted summary.
     *
     * This method removes HTML tags from the description and limits the 
     * text to a specified length, appending '...' if it exceeds the limit.
     *
     * @param int $length The number of characters to limit the description to. Default is 100.
     * @return string The truncated description.
     */
    public function getShortHighlightedSummary($length = 50)
    {
        return Str::limit(strip_tags($this->highlighted_summary), $length, '...');
    }
}