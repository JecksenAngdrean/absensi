<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_schedule', function (Blueprint $table) {
            $table->id();
            $table->integer('id_schedule');
            $table->date('tanggal_pertemuan');
            $table->integer('pertemuan');
            $table->integer('status_detail_schedule');
            $table->softDeletes();
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
        Schema::dropIfExists('detail_schedule');
    }
}
