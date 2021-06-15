<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ministry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ministry', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email')->unique();
            $table->string('phone',10)->unique();
            $table->string('userName')->unique();
            $table->string('passWord');
            $table->boolean('gender');
            $table->date('dateBirth');
            $table->text('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ministry');
    }
}
