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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_group_id')->constrained()->cascadeOnDelete();
            $table->string('code', 15);
            $table->string('name', 300);
            $table->string('barcode', 20)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('image', 2000)->nullable();
            $table->foreignId('unit_root_id')->constrained('units')->cascadeOnDelete();
            $table->foreignId('unit_conversion_1_id')->nullable()->constrained('units')->cascadeOnDelete();
            $table->integer('quantity_conversion_1')->nullable()->default(0);
            $table->foreignId('unit_conversion_2_id')->nullable()->constrained('units')->cascadeOnDelete();
            $table->integer('quantity_conversion_2')->nullable()->default(0);
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
        Schema::dropIfExists('products');
    }
};
