<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    protected $fillable = ['headline', 'description', 'cover', 'content', 'author', 'source_name', 'source_link', 'meta_title', 'meta_description', 'meta_keywords'];
}
