<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('oas_id');
            $table->foreign('oas_id')->references('id')->on('oas');
            $table->bigInteger('tool_id');
            $table->foreign('tool_id')->references('id')->on('tool');
            $table->text('coa')->nullable();
            $table->text('coo')->nullable();
            $table->text('pds')->nullable();
            $table->text('msds')->nullable();
            $table->text('berita_acara')->nullable();
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
        Schema::dropIfExists('doc_materials');
    }
}
