<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterContent extends Model
{
    protected $table = 'footer_contents';

    protected $fillable = [
        'description',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'linkedin_url',
        'youtube_url',
        'phone',
        'email',
        'address',
        'quick_links',
        'resources_links',
        'legal_links',
        'copyright_text',
    ];

    protected $casts = [
        'quick_links' => 'array',
        'resources_links' => 'array',
        'legal_links' => 'array',
    ];

    public $timestamps = true;
}
