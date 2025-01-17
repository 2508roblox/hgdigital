<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'short_desc']; // Thêm short_desc vào đây
    public function websites()
    {
        return $this->belongsToMany(Website::class, 'website_tag');
    }
}
