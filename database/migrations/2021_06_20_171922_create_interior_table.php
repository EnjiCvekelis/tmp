<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteriorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interior', function (Blueprint $table) {
            $table->id();
            $table->text('first_text');
            $table->string('first_image');
            $table->string('second_headline');
            $table->text('second_text');
            $table->string('third_headline');
            $table->text('third_text');
            $table->string('third_image');
            $table->string('fourth_headline');
            $table->text('fourth_text');
            $table->string('fourth_image');
            $table->string('headline');
            $table->text('description');
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interior');
    }
}
