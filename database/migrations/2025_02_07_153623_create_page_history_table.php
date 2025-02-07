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

        Schema::create('page_history', function (Blueprint $table) {
            $table->bigInteger('page_id', unsigned: true);
            $table->foreign('page_id')->references('id')->on('pages');
            $table->bigInteger('rich_content_id', unsigned: true);
            $table->foreign('rich_content_id')->references('id')->on('rich_contents');
            $table->timestamp('saved_at');
            $table->primary(['page_id', 'rich_content_id']);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_history');
    }
};
