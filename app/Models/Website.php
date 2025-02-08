<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        'slug', // Add slug here

    ];  
    protected $casts = [
        'technologies' => 'array',
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
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->name);
        });

        static::updating(function ($model) {
            $model->slug = Str::slug($model->name);
        });
    }
}
