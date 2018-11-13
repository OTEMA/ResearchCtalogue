<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::dropIfExists('publication');
        Schema::create('publication', function (Blueprint $table) {
            $table->increments('id');
            $table->idex('category_id');
            $table->string('author_name');
            $table->string('author_email')->unique();
            $table->string('publication_code');
            $table->text('description');
            $table->string('path')->nullable();
            $table->tinyinteger('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('publication');
    }

}
