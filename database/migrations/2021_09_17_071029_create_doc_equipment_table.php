<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_equipment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('oas_id');
            $table->foreign('oas_id')->references('id')->on('oas');
            $table->bigInteger('division_id');
            $table->foreign('division_id')->references('id')->on('division');
            $table->text('service_report')->nullable();
            $table->text('certificate_compliance')->nullable();
            $table->text('inspection_report')->nullable();
            $table->text('mill_certificate')->nullable();
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
        Schema::dropIfExists('doc_equipment');
    }
}
