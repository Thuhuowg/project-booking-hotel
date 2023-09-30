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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('hotel_id');
          //  $table->foreign('hotel_id')->references('id')->on('hotels');//chưa nghĩ ra khóa ngoại của cột tình trạng
            $table->softDeletes();
            $table->integer('quantity');
            $table->longText('description');
            $table->integer('person_number');
            $table->integer('price_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
