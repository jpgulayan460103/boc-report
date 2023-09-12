<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('identification')->nullable()->fulltext();
            $table->string('consignee')->nullable()->fulltext();
            $table->text('location')->nullable()->fulltext();
            $table->text('container_numbers')->nullable()->fulltext();
            $table->string('bill_of_lading_number')->nullable()->fulltext();
            $table->date('examination_date')->nullable();
            $table->text('description_as_declared')->nullable()->fulltext();
            $table->text('description_as_found')->nullable()->fulltext();
            $table->float('net_weight', 15, 2)->nullable();
            $table->float('customs_value', 15, 2)->nullable();
            $table->float('freight', 15, 2)->nullable();
            $table->float('insurance', 15, 2)->nullable();
            $table->float('dutiable_value', 15, 2)->nullable();
            $table->string('exchange_rate')->nullable();
            $table->float('exchange_rate', 15, 2)->nullable();
            $table->float('dutiable_value_dv', 15, 2)->nullable();
            $table->string('duty_rate')->nullable();
            $table->float('customs_duty', 15, 2)->nullable();
            $table->float('brokerage_fee', 15, 2)->nullable();
            $table->float('arrastre', 15, 2)->nullable();
            $table->float('ipf', 15, 2)->nullable();
            $table->float('cds', 15, 2)->nullable();
            $table->float('total_landed_cost', 15, 2)->nullable();
            $table->float('vat', 15, 2)->nullable();
            $table->text('total')->nullable()->fulltext();
            $table->text('remarks')->nullable()->fulltext();
            $table->string('prepared_by_name')->nullable()->fulltext();
            $table->string('prepared_by_designation')->nullable()->fulltext();
            $table->string('reviewed_by_name')->nullable()->fulltext();
            $table->string('reviewed_by_designation')->nullable()->fulltext();
            $table->string('approved_name')->nullable()->fulltext();
            $table->string('approved_designation')->nullable()->fulltext();
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
        Schema::dropIfExists('reports');
    }
}
