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
        Schema::create('wanted_properties', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_buy');
            $table->string('location');
            $table->enum('status',['active','not_active'])->default('active');
            $table->enum('property_type',['Apartment','House','Residential Land','Hotel and Villa','Commercial Land','Commercial Building','Warehouse','Factory','Estate','Other']);
            $table->foreignId('users_id')->constrained();
            $table->text('requirement')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wanted_properties');
    }
};
