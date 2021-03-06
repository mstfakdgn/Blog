<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyColoumnsInAdmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            
                //
                $table->boolean('status')->nullable()->change();
                $table->string('phone')->nullable()->change();
                  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            
                $table->boolean('status')->nullable(false)->change();
                $table->string('phone')->nullable(false)->change();
            
        });
    }
}
