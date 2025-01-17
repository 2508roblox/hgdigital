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
        Schema::create('template_websites', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên template
            $table->string('slug')->unique(); // Slug
            $table->string('thumbnail')->nullable(); // Ảnh thumbnail
            $table->string('image')->nullable(); // Ảnh website
            $table->integer('purchases')->default(0); // Số lượt mua
            $table->decimal('original_price', 10, 2)->default(0); // Giá gốc
            $table->decimal('discounted_price', 10, 2)->default(0); // Giá khuyến mãi
            $table->string('demo_link')->nullable(); // Link demo
            $table->text('description')->nullable(); // Mô tả
            $table->unsignedBigInteger('category_id'); // Danh mục
            $table->timestamps();

            // Foreign key
            $table->foreign('category_id')->references('id')->on('template_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_websites');
    }
};
