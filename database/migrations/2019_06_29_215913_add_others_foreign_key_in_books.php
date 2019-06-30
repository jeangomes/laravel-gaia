<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOthersForeignKeyInBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {

            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('collection_id')->nullable();
            $table->unsignedBigInteger('gender_id');

            $table->foreign('company_id')->references('id')
                ->on('publishing_companies');
            $table->foreign('collection_id')->references('id')
                ->on('book_collections');
            $table->foreign('gender_id')->references('id')
                ->on('book_genders');
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
            //
        });
    }
}
