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

        Schema::create('page', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->string('slug')->unique();
            $table->boolean('is_published')->default(false);
            $table->bigInteger('created_by_id', unsigned: true);
            $table->foreign('created_by_id')->references('id')->on('user');
            $table->bigInteger('current_rich_content_id', unsigned: true);
            $table->foreign('current_rich_content_id')->references('id')->on('rich_content');
            $table->bigInteger('category_id', unsigned: true);
            $table->foreign('category_id')->references('id')->on('category');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page');
    }
};
