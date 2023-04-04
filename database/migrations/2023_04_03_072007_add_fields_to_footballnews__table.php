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
        Schema::table('footballnews', function (Blueprint $table) {
            $table->string('title');
            $table->string('author');
            $table->text('content');
            $table->string('tags');
            $table->string('image_url')->nullable();
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('comments')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('footballnews',[
            'title', 'author', 'content', 'tags', 'image_url', 'views', 'likes', 'comments'
        ]);
    }
};
