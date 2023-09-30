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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_code');
            $table->dateTime('checkin_date',  0);
            $table->dateTime('checkout_date', 0);
            $table->integer('user_id');
         //   $table->integer('status_booking_id');
            $table->integer('price_id');
          //  $table->integer('payment_method_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
