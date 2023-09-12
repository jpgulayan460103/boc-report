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
            $table->string('net_weight')->nullable();
            $table->string('customs_value')->nullable();
            $table->string('freight')->nullable();
            $table->string('insurance')->nullable();
            $table->string('dutiable_value')->nullable();
            $table->string('exchange_rate')->nullable();
            $table->string('dutiable_value_dv')->nullable();
            $table->string('duty_rate')->nullable();
            $table->string('customs_duty')->nullable();
            $table->string('brokerage_fee')->nullable();
            $table->string('arrastre')->nullable();
            $table->string('warfage')->nullable();
            $table->string('ipf')->nullable();
            $table->string('cds')->nullable();
            $table->string('irs')->nullable();
            $table->string('total_landed_cost')->nullable();
            $table->string('vat')->nullable();
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
