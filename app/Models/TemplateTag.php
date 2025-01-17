<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;
class TemplateTag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function templates()
    {
        return $this->belongsToMany(TemplateWebsite::class, 'template_website_tag');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = $model->slug ?: Str::slug($model->name);
        });

        static::updating(function ($model) {
            if ($model->isDirty('name')) {
                $model->slug = Str::slug($model->name);
            }
        });
    }
}
