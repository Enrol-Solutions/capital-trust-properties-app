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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained();
            $table->timestamps();
            $table->enum('property_type',['Apartment','House','Residential Land','Hotel and Villa','Commercial Land','Commercial Building','Warehouse','Factory','Estate','Other']);
            $table->enum('deal_type',['forBuy','forRent']);
            $table->enum('posted_by',['owner','broker']);
            $table->integer('bed_rooms')->nullable();
            $table->integer('parking')->nullable();
            $table->integer('bath_rooms')->nullable();
            $table->integer('land_extent')->nullable();
            $table->float('square_feet')->nullable();
            $table->text('district');
            $table->enum('province',['Southern','Western','Central','Sabaragamuwa','Eastern','Uva','North western','North Central','North']);
            $table->float('asking_price');
            $table->text('location');
            $table->boolean('furnished')->nullable();
            $table->enum('status',['to_active','active','not_active'])->default('to_active');
            $table->enum('commision',['no','3%','one month fee']);
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
