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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('sinopsis');
            $table->longText('body');
            $table->string('publisher');
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('authors');
            $table->date('release_date');
            $table->decimal('price');
            $table->bigInteger('stock');
            $table->bigInteger('isbn');
            $table->longText('cover')->nullable();
            $table->decimal('rating');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('status_id')->on('book_statuses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
