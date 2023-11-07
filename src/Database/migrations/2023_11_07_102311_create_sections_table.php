<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('platform_id')->constrained('platforms', 'id')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('created_at')->default(\Carbon\Carbon::now()->timestamp);
            $table->unsignedBigInteger('updated_at')->nullable();
            $table->unsignedBigInteger('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('sections', function (Blueprint $table) {
//            $table->dropForeign(['platform_id']);
//        });
        Schema::dropIfExists('sections');
    }
}
