<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'main_image',
        'thumbnail',
        'field',
        'technologies',
        'website_url',
        'category_id',
    ];

    // Quan hệ với danh mục
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Quan hệ với tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'website_tag');
    }
}
