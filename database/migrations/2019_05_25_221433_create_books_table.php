<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('author_id');
            $table->string('title',200);
            $table->integer('page_number')->default(0);
            $table->string('owner',30)->default('Jean');
            $table->char('xerox',1)->default('N');
            $table->char('is_read',1)->default('N');
            $table->char('is_digital',1)->default('N');
            $table->year('year_publish')->nullable();
            $table->string('isbn',40)->default('-');
            $table->tinyInteger('volume')->default(0);
            $table->text('origin');
            $table->string('edition',30)->default(1);
            $table->longText('img_cover')->nullable();
            $table->float('price')->nullable();
            $table->date('purchase_date')->nullable();
            $table->text('obs')->nullable();
            $table->enum('language',['Português','Inglês'])->default('Português');
            $table->timestamps();
        });

        Schema::table('books', function (Blueprint $table) {
            $table->foreign('author_id')->references('id')->on('authors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
