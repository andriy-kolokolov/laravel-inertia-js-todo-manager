<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('priority_task', function (Blueprint $table) {
            $table->unsignedInteger('task_id');
            $table->unsignedInteger('priority_id');
            $table->foreign('task_id')
                ->references('id')
                ->on('tasks')
                ->onDelete('cascade');
            $table->foreign('priority_id')
                ->references('id')
                ->on('priorities')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('priority_task');
    }
};
