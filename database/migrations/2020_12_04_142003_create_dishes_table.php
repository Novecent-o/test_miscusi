<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('method');

            $table->unsignedBigInteger('season_id');
            $table->foreign('season_id')
                ->references('id')
                ->on('seasons')
                ->onDelete('cascade');
        
            // FORMA CONTRATTA
            // $table->foreignId('season_id')
            //     ->constrained();

            $table->string('type');
            $table->float('price', 5, 2);
            $table->text('image');
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
        Schema::dropIfExists('dishes');
    }
}
