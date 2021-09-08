<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['first_headline', 'first_image', 'first_text', 'second_headline', 'second_image', 'second_text', 'third_headline', 'third_subheadline', 'headline', 'description', 'meta_title', 'meta_description', 'meta_keywords'];

}
