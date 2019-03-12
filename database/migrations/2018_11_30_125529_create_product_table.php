<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateProductTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('product',function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->string("catalog_id");
            $table->string("bodysmall")->nullable();
            $table->text("body")->nullable();
            $table->string("picture")->nullable();
            $table->string("type")->nullable();
            $table->string("price")->nullable();
            $table->string("procent")->nullable();
            $table->string("color")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product');
    }

}