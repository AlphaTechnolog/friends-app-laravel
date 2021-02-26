<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->id();
            $table->integer('marital_status_id')->unsigned();
            $table->integer('sex_id')->unsigned();
            $table->string('name');
            $table->string('lastname');

            $table
                ->foreign('marital_status_id')
                ->references('id')
                ->on('marital_statuses')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table
                ->foreign('sex_id')
                ->references('id')
                ->on('sexes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('friends');
    }
}
