<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterprise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprise', function (Blueprint $table) {
            $table->string('name', 80)->unique();
            $table->string('address', 100);
            $table->string('postcode', 5);
            $table->string('city', 50);
            $table->string('phone_number', 10)->unique();
            $table->string('email', 100)->unique();
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
        Schema::dropIfExists('enterprise');
    }
}
