<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // ID Integer pk AI
            $table->string('code', 4 )->unique(); // code varrchar (4) unique not null
            $table->string('name', 30 ); // name varrchar (30) unique not null
            $table->string('phone',15 )->nullable();//phone varchar(15) null
            $table->string('address' );
            $table->timestamps();  // created_at dan update
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
