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
            $table->unsignedBigInteger('first_genre_id')->default(0);
            //$table->foreign('first_genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->unsignedBigInteger('second_genre_id')->default(0);
            //$table->foreign('second_genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->unsignedBigInteger('third_genre_id')->default(0);
            //$table->foreign('third_genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->unsignedBigInteger('fourth_genre_id')->default(0);
            $table->unsignedBigInteger('fifth_genre_id')->default(0);
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
            //$table->dropForeign(['first_genre_id']);
            $table->dropColumn(['first_genre_id']);
            //$table->dropForeign(['second_genre_id']);
            $table->dropColumn(['second_genre_id']);
            //$table->dropForeign(['third_genre_id']);
            $table->dropColumn(['third_genre_id']);
            $table->dropColumn(['fourth_genre_id']);
            $table->dropColumn(['fifth_genre_id']);
        });
    }
};
