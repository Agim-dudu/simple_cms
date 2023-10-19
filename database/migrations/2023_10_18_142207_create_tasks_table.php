<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('priority', ['High', 'Medium', 'Low']);
            $table->enum('status', ['Not done', 'Done'])->default('Not Done');
            $table->timestamps();

            // Tambahkan kolom-kolom berikut sebelum mendefinisikan kunci asing
            $table->foreignId('project_id')->constrained('projects');
            $table->foreignId('user_id')->constrained('users'); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
