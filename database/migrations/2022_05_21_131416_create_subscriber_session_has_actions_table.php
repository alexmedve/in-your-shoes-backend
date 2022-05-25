<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriberSessionHasActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriber_session_has_actions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subscriber_session_id');
            $table->unsignedBigInteger('action_id');
            $table->timestamps();

            $table->foreign('subscriber_session_id')
                ->references('id')
                ->on('subscriber_sessions')
                ->onDelete('cascade');
            $table->foreign('action_id')
                ->references('id')
                ->on('actions')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriber_session_has_actions');
    }
}
