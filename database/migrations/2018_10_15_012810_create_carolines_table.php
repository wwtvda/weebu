<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarolinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carolines', function (Blueprint $table) {
            $table->increments('nim'); //membuat kolom nim auto increment
			$table->string('nama'); //membuat kolom nama
			$table->string('email'); //membuat kolom email
			$table->string('nohp'); //membuat kolom no hp
			$table->text('alamat'); //membuat kolom alamat dengan tipe text
            $table->timestamps(); //membuat kolom created at dan update at sebagai fungsi dasar laravel
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carolines');
    }
}
