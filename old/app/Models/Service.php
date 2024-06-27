<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected  $fillable = [
        'service_name',
        'service_id',
        'service_link',
        'service_icon',
        'service_title',
        'service_header',
        'service_sub_header',
        'service_video_link',
        'group_name',
        'all_plan_id',
        'text_field_one',
        'text_field_two',
        'text_field_three',
        'text_field_four',
        'text_field_five',
        'text_field_six',
        'text_field_seven',
        'text_field_eight',
        'service_file_name',
        'meta_description',
        'service_description',
        'popular_and_not_available',
        'new_and_hot',
        'faqs_options',
        'benefit_options',
        'simple_report',
        'html_content',
        'html_content_bottom',
        'header_codes'


    ];


    public function Plans(){
        return $this->belongsToMany('App\Models\Plan');
    }
}
