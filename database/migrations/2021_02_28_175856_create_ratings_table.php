<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commented_user_id')->constrained('users');
            $table->foreignId('commentator_user_id')->constrained('users');
            $table->foreignId('task_id')->constrained();
            $table->index(['commented_user_id', 'commentator_user_id', 'task_id']);
            $table->float('rating');
            $table->string('text');
            $table->boolean('is_commentator_owner');
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
        Schema::dropIfExists('ratings');
    }
}
