<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('family_name');
            $table->string('first_name');
            $table->string('sex');
            $table->string('scolaire')->nullable();
            $table->string('email')->nullable();
            $table->string('parent')->nullable();
            $table->string('parent_email')->nullable();
            $table->string('num_parent')->nullable();


            $table->foreignId('commune_id')->nullable()->constrained("communes")->cascadeOnUpdate()->nullOnDelete();
            $table->string('quran')->nullable();
            $table->text('health')->nullable();
            $table->text('discription')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
