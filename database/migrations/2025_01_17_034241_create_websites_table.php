<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên website
            $table->text('description')->nullable(); // Mô tả
            $table->string('main_image')->nullable(); // Ảnh chính
            $table->string('thumbnail')->nullable(); // Ảnh thumbnail
            $table->string('field')->nullable(); // Lĩnh vực
            $table->string('technologies')->nullable(); // Công nghệ (tags)
            $table->string('website_url')->nullable(); // URL website
            $table->unsignedBigInteger('category_id')->nullable(); // Danh mục
            $table->timestamps();

            // Tạo khoá ngoại
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        Schema::create('website_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('website_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            // Tạo khoá ngoại
            $table->foreign('website_id')->references('id')->on('websites')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
