<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decors', function (Blueprint $table) {
            $table->id();
            $table->string('first_headline');
            $table->string('first_image');
            $table->text('first_text');
            $table->string('second_headline');
            $table->string('second_image');
            $table->text('second_text');
            $table->string('third_headline');
            $table->string('third_subheadline');
            $table->string('headline');
            $table->string('description');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('decors');
    }
}
