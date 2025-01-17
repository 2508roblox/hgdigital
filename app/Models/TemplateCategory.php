<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image'];

    public function templates()
    {
        return $this->hasMany(TemplateWebsite::class, 'category_id');
    }
}
