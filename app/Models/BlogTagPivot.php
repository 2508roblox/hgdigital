<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTagPivot extends Model
{
    use HasFactory;

    protected $table = 'blog_tag'; // Tên bảng trung gian
    public $timestamps = false; // Bảng trung gian thường không cần timestamps
    protected $fillable = [
        'blog_id',
        'tag_id',
    ];
}