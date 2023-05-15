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
        Schema::create('games', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('publisher', 40);
            $table->date('publication_year');
            $table->string('developers', 40);
            $table->string('platform');
            $table->text('description');
            $table->tinyInteger('pegi')->nullable();
            $table->string('genre');
            $table->float('rating',3,1)->default(0);
            $table->text('thumbnail');
            $table->boolean('early_access')->default(false);

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
        Schema::dropIfExists('games');
    }
};
