<?php

use App\Models\Technology;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $technos = ['HTML5','CSS3','JS','LARAVEL','MYSQL','BOOTSTRAP'];

        foreach($technos as $techno){
            Technology::create(['name'=>$techno]);
        }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technologies');
    }
};
