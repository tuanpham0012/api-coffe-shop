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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portal_id')->constrained()->cascadeOnDelete();
            $table->string('code');
            $table->string('description', 1000);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('quantity');
            $table->integer('quantity_used')->default(0);
            $table->tinyInteger('type')->default(0)->comment('0 - not re-use, 1 - re-use');
            $table->boolean('limit_use')->default(1);
            $table->float('percent_discount')->default(0)->comment('phần trăm giảm giá');
            $table->float('price_discount' ,12, 2)->default(0)->comment('số tiền giảm giá');

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
        Schema::dropIfExists('vouchers');
    }
};
