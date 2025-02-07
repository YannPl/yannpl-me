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
        Schema::disableForeignKeyConstraints();

        Schema::create('article_tag', function (Blueprint $table) {
            $table->bigInteger('tag_id', unsigned: true);
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->bigInteger('article_id', unsigned: true);
            $table->foreign('article_id')->references('id')->on('articles');
            $table->primary(['tag_id', 'article_id']);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_tag');
    }
};
