<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['first_headline', 'first_image', 'first_text', 'second_headline', 'second_subheadline', 'headline', 'description', 'meta_title', 'meta_description', 'meta_keywords'];
}
