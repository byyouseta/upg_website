<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {

            $table->text('alamat')->after('email')->nullable();
            $table->string('nohp', 20)->after('alamat')->unique()->nullable();
            $table->smallInteger('level')->after('nohp');
            $table->dateTime('deleted_at')->after('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('alamat');
            $table->dropColumn('nohp');
            $table->dropColumn('level');
            $table->dropColumn('deleted_at');
        });
    }
}
