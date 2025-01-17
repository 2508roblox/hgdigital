<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateWebsite extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'slug', 
        'thumbnail', 
        'image', 
        'purchases', 
        'original_price', 
        'discounted_price', 
        'demo_link', 
        'description', 
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(TemplateCategory::class, 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(TemplateTag::class, 'template_website_tag');
    }
}
