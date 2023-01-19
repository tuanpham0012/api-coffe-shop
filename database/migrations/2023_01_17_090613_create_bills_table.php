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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portal_id')->constrained()->onDelete('cascade');
            $table->foreignId('table_id')->constrained()->cascadeOnDelete();
            $table->foreignId('customer_id')->constrained()->cascadeOnDelete();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete();
            $table->foreignId('voucher_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('voucher_code')->nullable();
            $table->string('code');
            $table->string('note', 12)->nullable();
            $table->float('total_price',12, 2)->comment('Tổng tiền');
            $table->float('percent_surcharge')->default(0)->comment('phần trăm phụ phí');
            $table->float('price_surcharge' ,12, 2)->default(0)->comment('số tiền phụ phí');
            $table->float('percent_discount')->default(0)->comment('phần trăm giảm giá');
            $table->float('price_discount' ,12, 2)->default(0)->comment('số tiền giảm giá');
            $table->float('price_after_discount' ,12, 2)->default(0)->comment('số tiền sau giảm giá');
            $table->string('tax_code')->nullable()->comment('Mã thuế');
            $table->float('tax' ,12, 2)->default(0)->commet('Tỉ lệ thuế');
            $table->float('fee' ,12, 2)->default(0)->comment('Tỉ lệ phí');
            $table->float('tax_amount' ,12, 2)->default(0)->commet('Tiền thuế');
            $table->float('fee_amount' ,12, 2)->default(0)->comment('Tiền phí');
            $table->float('price_before_tax' ,12, 2)->comment('Giá trước thuế phí');
            $table->tinyInteger('status')->default(0);

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
        Schema::dropIfExists('bills');
    }
};
