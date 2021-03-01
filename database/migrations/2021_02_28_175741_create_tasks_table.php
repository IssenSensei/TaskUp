<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content')->nullable();
            $table->foreignId('creator_user_id')->constrained('users');
            $table->foreignId('executor_user_id')->nullable()->constrained('users');
            $table->foreignId('cyclic_type_id')->constrained();
            $table->foreignId('task_status_id')->constrained();
            $table->foreignId('priority_id')->constrained();
            $table->string('localization')->nullable();
            $table->string('pay')->nullable();
            $table->timestamp('repeat_until')->nullable();

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
        Schema::dropIfExists('tasks');
    }
}
