<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('distributor_id' , 20)->require()->key();
            $table->string('full_name' , 50);
            $table->string('phone' , 20)->nullable();
            $table->string('email' , 50)->unique();
            
            $table->string('avatar_url')->nullable();
            
            $table->string('password')->nullable();
            
            $table->string('original_distributor' , 20 )->nullable();
            $table->string('original_distributor_name', 50)->nullable();
            $table->string('current_distributor' , 20)->nullable();
            $table->string('current_distributor_name', 50)->nullable();
            
            
            $table->string('privileges', 50)->nullable();
            $table->dateTime('signup_at')->nullable();            
            $table->dateTime('expiration_at')->nullable();
                        
            $table->string('rank' , 25)->nullable();
            $table->string('team' , 25)->nullable();
            
            $table->string('account_status' , 10)->default('0');
            
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
                                    
            $table->text('system_notes')->nullable();
            $table->text('comments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
