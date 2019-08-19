<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('category_id','fk_category_id')->references('id')->on('categories')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('user_id','fk_user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('fk_category_id');
            $table->dropForeign('fk_user_id');
            //
        });
    }
}
