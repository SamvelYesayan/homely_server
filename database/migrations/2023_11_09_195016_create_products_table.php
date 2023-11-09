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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('address');
            $table->string('price_usd');
            $table->string('price_amd');
            $table->string('price_rub');
            $table->text('description');
            $table->text('simple_words');
            $table->text('amenities');
            $table->string('special_status')->nullable();
            $table->string('general_photo');
            $table->string('broker_first_name');
            $table->string('broker_last_name');
            $table->string('broker_photo');
            $table->string('broker_email')->nullable();
            $table->string('broker_phone')->nullable();
            $table->boolean('new-built');
            $table->boolean('sale');
            $table->string('surface');
            $table->string('number_of_rooms');
            $table->string('state');
            $table->string('district')->nullable();
            $table->string('property_type');
            $table->string('rooms');
            $table->string('building_type');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
