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
        // First, drop the existing primary key if it exists
        Schema::table('properties', function (Blueprint $table) {
            // Check if the primary key exists before trying to drop it
            $sm = Schema::getConnection()->getDoctrineSchemaManager();
            $indexes = $sm->listTableIndexes('properties');
            
            if (isset($indexes['primary'])) {
                $table->dropPrimary('id');
            }
        });

        // Then modify the id column to be auto-incrementing
        DB::statement('ALTER TABLE properties MODIFY id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT');

        // Finally, add the primary key back
        Schema::table('properties', function (Blueprint $table) {
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // This is a one-way migration
    }
};
