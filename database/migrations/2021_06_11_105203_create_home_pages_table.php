<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('main_headline');
            $table->string('main_subheadline');
            $table->string('main_link');
            $table->string('office_headline');
            $table->string('office_subheadline');
            $table->text('office_text');
            $table->string('office_link');
            $table->string('services_headline');
            $table->string('services_subheadline');
            $table->text('services_text');
            $table->string('values_headline');
            $table->string('values_subheadline');
            $table->string('portfolio_headline');
            $table->string('portfolio_subheadline');
            $table->string('portfolio_link');
            $table->string('blog_headline');
            $table->string('blog_subheadline');
            $table->string('blog_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_pages');
    }
}
