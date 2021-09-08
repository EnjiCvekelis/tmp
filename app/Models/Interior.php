<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interior extends Model
{
    protected $table = 'interior';

    protected $fillable = ['first_text', 'first_image', 'second_headline', 'second_text', 'third_headline', 'third_text', 'third_image', 'fourth_headline', 'fourth_text', 'fourth_image', 'headline', 'description', 'meta_title', 'meta_description', 'meta_keywords'];

    public $timestamps = false;

}
