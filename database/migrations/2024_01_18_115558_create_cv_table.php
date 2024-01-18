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
        Schema::create('cv', function (Blueprint $table) {
            $table->id();
            $table->string('lookingjob');
            $table->text('experience');
            $table->string('phonenumber');
            $table->string('document');
            $table->unsignedBigInteger('userid'); // Use unsignedBigInteger for foreign keys
            $table->timestamps();

            $table->foreign('userid')
                  ->references('id')
                  ->on('users')  // Assuming your users table is named 'users'
                  ->onDelete('cascade');  // Adjust the onDelete behavior as needed
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv');
    }
};
