<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    protected $fillable = ['main_headline', 'main_subheadline', 'main_link', 'office_headline', 'office_subheadline', 'office_text', 'office_link', 'services_headline', 'services_subheadline', 'services_text', 'values_headline', 'values_subheadline', 'portfolio_headline', 'portfolio_subheadline', 'portfolio_link', 'blog_headline', 'blog_subheadline', 'blog_link', 'meta_title', 'meta_description', 'meta_keywords'];

    public $timestamps = false;
}
