<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_language', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_id')->constrained('languages', 'id')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('key_id')->constrained('keys', 'id')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('key_language', function (Blueprint $table) {
            $table->dropForeign(['language_id']);
            $table->dropForeign(['key_id']);
        });
        Schema::dropIfExists('key_language');
    }
}
