<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'search_key'];

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
}
