<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['headline', 'description', 'content', 'cover', 'project_category_id', 'meta_title', 'meta_description', 'meta_keywords'];

    public function images()
    {
        return $this->hasMany(ProjectImages::class);
    }

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }
}
