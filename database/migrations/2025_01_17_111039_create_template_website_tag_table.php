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
        Schema::create('template_website_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('template_website_id'); // ID của template
            $table->unsignedBigInteger('template_tag_id'); // ID của tag
            $table->timestamps();

            // Foreign keys
            $table->foreign('template_website_id')->references('id')->on('template_websites')->onDelete('cascade');
            $table->foreign('template_tag_id')->references('id')->on('template_tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_website_tag');
    }
};
