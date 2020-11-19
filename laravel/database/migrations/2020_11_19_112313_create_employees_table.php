<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('sexe', array('M', 'F', 'NB'));
            $table->string('last_name', 80);
            $table->string('first_name', 80);
            $table->string('address', 100);
            $table->string('postcode', 5);
            $table->string('city', 50);
            $table->string('phone_number', 10)->unique();
            $table->string('email', 100)->unique();
            $table->string('enterprise_name', 80);
            $table->timestamps();
        });

       /* Schema::table('employees', function (Blueprint $table) {
            $table->foreign('enterprise_name')->references('name')->on('enterprise');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
