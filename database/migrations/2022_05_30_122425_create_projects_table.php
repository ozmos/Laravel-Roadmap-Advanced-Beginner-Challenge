<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('description');
            $table->dateTime('deadline');
            $table->softDeletes();
            $table
                ->foreignId('status_id')
                ->default(1)
                ->constrained()
                ->cascadeOnDelete();
            $table
                ->foreignId('user_id')
                ->default(1)
                ->constrained()
                ->cascadeOnDelete();
            $table
                ->foreignId('client_id')
                ->default(1)
                ->constrained()
                ->cascadeOnDelete();
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
        Schema::dropIfExists('projects');
    }
};
