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
            $table->id(); // This will automatically create an auto-increment primary key column
            $table->string('name', 50);
            $table->unsignedInteger('age');
            $table->string('address', 100);
            $table->string('phone');
            $table->string('doctor', 100);
            $table->date('date');
            $table->text('problem');
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
