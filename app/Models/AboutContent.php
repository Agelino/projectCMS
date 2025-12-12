<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    protected $table = 'about_contents';

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'founded_year',
        'active_users',
        'materials',
        'free_access',
        'story_title',
        'story_content',
        'mission',
        'vision',
        'value1_title',
        'value1_desc',
        'value2_title',
        'value2_desc',
        'value3_title',
        'value3_desc',
        'testimonial_text',
        'founder_name',
        'founder_position',
        'founder_linkedin',
        'founder_twitter',
        'collaboration_title',
        'collaboration_desc',
    ];

    public $timestamps = true;
}
