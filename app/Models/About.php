<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['buro_headline', 'buro_text', 'approach_headline', 'approach_text', 'project_headline', 'project_text', 'philosophy_headline', 'philosophy_text', 'meta_title', 'meta_description', 'meta_keywords'];

    public $timestamps = false;
}
