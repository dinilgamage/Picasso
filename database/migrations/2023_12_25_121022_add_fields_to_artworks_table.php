<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('artworks', function (Blueprint $table) {
        $table->string('material')->nullable();
        $table->string('size')->nullable();
        $table->string('frame')->nullable();
        $table->string('signature')->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('artworks', function (Blueprint $table) {
        $table->dropColumn('material');
        $table->dropColumn('size');
        $table->dropColumn('frame');
        $table->dropColumn('signature');
    });
}
};
