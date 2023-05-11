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
        Schema::create('course_posts', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->text("short_desc")->nullable();
            $table->text("full_desc")->nullable();
            $table->string("image")->nullable();
            $table->string("author")->nullable();
            $table->string("entered_date")->nullable();
            $table->integer("is_active")->default(1);
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
        Schema::dropIfExists('course_posts');
    }
};
