<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'site_logo',
        'slider_title',
        'about_us_title',
        'about_us_description',
        'about_us_image',
        'service_title',
        'service_description',
        'slider_description',
        'blog_title',
        'blog_description',
        'slider_image',
        'slider_video_link',
        'site_mobile',
        'site_email',
        'site_address',
        'site_schedule',
        'footer_logo',
        'footer_description',
        'who_are_you',
        'our_vision',
        'our_history',
    ];
    public function getSiteLogoAttribute($value)
    {

        if ($value) {


            return \Storage::disk('setting')->url($value);
        }
        return $value;

    }
    public function getSliderImageAttribute($value)
    {

        if ($value) {


            return \Storage::disk('setting')->url($value);
        }
        return $value;

    }
    public function getFooterLogoAttribute($value)
    {

        if ($value) {


            return \Storage::disk('setting')->url($value);
        }
        return $value;

    }
}
