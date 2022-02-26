<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapersonelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapersonel', function (Blueprint $table) {
           $table->Increments('id');
            $table->integer('id_pangkat')->unsigned()->nullable();
            $table->string('nama')->nullable();
            $table->string('nrp')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('umum')->nullable();
            $table->string('polri')->nullable();
            $table->foreign('id_pangkat')->references('id')->on('pangkat')->onDelete('cascade');
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
        Schema::dropIfExists('datapersonel');
    }
}
