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
        Schema::create('portals', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('code');
            $table->string('tax_code', 13)->nullable();
            $table->foreignId('city_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('district_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('ward_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('address', 255)->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->string('website', 50)->nullable();
            $table->string('start_time', 5)->nullable()->default('08:00');
            $table->string('end_time', 5)->nullable()->default('23:30');
            $table->string('morning_start', 5)->default('07:00')->comment('Giờ bắt đầu ca sáng');
            $table->string('morning_end', 5)->default('11:59');
            $table->string('afternoon_start', 5)->default('12:00')->comment('Giờ bắt đầu ca chiều');
            $table->string('afternoon_end', 5)->default('17:29');
            $table->string('night_start', 5)->default('17:30')->comment('Giờ bắt đầu ca tối');
            $table->string('night_end', 5)->default('23:59');
            $table->date('start_date')->nullable()->comment('Ngày bắt đầu');

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
        Schema::dropIfExists('portals');
    }
};
