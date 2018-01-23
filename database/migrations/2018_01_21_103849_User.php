<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customer', function(Blueprint $table){

            $table->engine = 'InnoDB';
        
            $table->increments('idCustomer');
            $table->string('FName', 45);
            $table->string('MName', 45)->nullable();
            $table->string('LName', 45)->nullable();
            $table->string('Username', 45);
            $table->string('Password', 45)->nullable();
            $table->string('Contactno', 10);->nullable();
            $table->string('Companyregno', 45)->nullable();
            $table->string('Comapny_Name', 45)->nullable();
            $table->rememberToken();
            $table->timestamps();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Customer');
    }
}
