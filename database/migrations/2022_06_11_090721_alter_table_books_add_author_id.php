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
        Schema::table('books', function (Blueprint $table) {
            $table->unsignedBigInteger('first_author_id')->default(0);
            $table->foreign('first_author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->unsignedBigInteger('second_author_id')->default(0);
            $table->foreign('second_author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->unsignedBigInteger('third_author_id')->default(0);
            $table->foreign('third_author_id')->references('id')->on('authors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['first_author_id']);
            $table->dropColumn(['first_author_id']);
            $table->dropForeign(['second_author_id']);
            $table->dropColumn(['second_author_id']);
            $table->dropForeign(['third_author_id']);
            $table->dropColumn(['third_author_id']);
        });
    }
};
