<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('profile_id');
            $table->string('edited_at');
            $table->string('edited_name');
            $table->string('edhited_gender');
            $table->string('edhited_hobby');
            $table->string('edhited_introduction');
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
        Schema::dropIfExists('profiles_histories');
    }
}
