<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up(){
    Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->foreignId('association_id')->constrained();
        $table->string('name');
        $table->text('description');
        $table->date('date');
        $table->string('location');
        // Add other event-related columns as needed...
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
        Schema::dropIfExists('evenements');
    }
};