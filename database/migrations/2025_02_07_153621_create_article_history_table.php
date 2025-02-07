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

        Schema::create('article_history', function (Blueprint $table) {
            $table->bigInteger('article_id', unsigned: true);
            $table->foreign('article_id')->references('id')->on('article');
            $table->bigInteger('rich_content_id', unsigned: true);
            $table->foreign('rich_content_id')->references('id')->on('rich_content');
            $table->timestamp('saved_at');
            $table->primary(['article_id', 'rich_content_id']);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_history');
    }
};
