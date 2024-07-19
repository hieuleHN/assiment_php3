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
            $table->string("title",200);
            $table->string("thumbnail",250);
            $table->string("author",100);
            $table->string("publisher",150);
            $table->date("Publication");
            $table->double("Price",1000000);
            $table->integer("Quantity");
            $table->unsignedBigInteger("Category_id");
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
