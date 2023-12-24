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
    Schema::table('users', function (Blueprint $table) {
        $table->string('avatar')->nullable();
        $table->text('bio')->nullable();
        $table->string('social_links')->nullable();
        $table->string('website')->nullable();
        $table->string('headline')->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('avatar');
        $table->dropColumn('bio');
        $table->dropColumn('social_links');
        $table->dropColumn('website');
        $table->dropColumn('headline');
    });
}
};
