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
        Schema::create('resume', function (Blueprint $table) { 
            $table->id();
            $table->string('company');
            $table->text('education');
            $table->text('skills');
            $table->string('workExperience');
            $table->string('phoneNumber');
            $table->string('document');
            $table->unsignedBigInteger('userid');
            $table->timestamps();

            $table->foreign('userid')->references('id')->on('users')  // Assuming your users table is named 'users'
            ->onDelete('cascade');  // Adjust the onDelete behavior as needed
            //what company u from , phone number , what does your company do
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resume');
    }
};
