<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenandaPostinganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penanda_postingan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('postingan_id')->constrained('postingan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('penanda_id')->constrained('penanda')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('penanda_postingan');
    }
}
