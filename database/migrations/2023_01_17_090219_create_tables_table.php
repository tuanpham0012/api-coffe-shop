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
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('name', 10);
            $table->foreignId('zone_id')->constrained()->cascadeOnDelete();
            $table->foreignId('floor_id')->constrained()->cascadeOnDelete();
            $table->foreignId('portal_id')->constrained()->cascadeOnDelete();
            $table->smallInteger('position')->nullable();
            $table->string('card_number', 10)->nullable();
            $table->integer('width')->unsigned()->default(0);
            $table->integer('height')->unsigned()->default(0);
            $table->integer('top')->unsigned()->default(0);
            $table->integer('left')->unsigned()->default(0);

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('tables');
    }
};
