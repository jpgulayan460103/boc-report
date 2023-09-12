<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'identification',
        'consignee',
        'location',
        'container_numbers',
        'bill_of_lading_number',
        'examination_date',
        'description_as_declared',
        'description_as_found',
        'net_weight',
        'customs_value',
        'freight',
        'insurance',
        'dutiable_value',
        'exchange_rate',
        'exchange_rate',
        'dutiable_value_dv',
        'duty_rate',
        'customs_duty',
        'brokerage_fee',
        'arrastre',
        'ipf',
        'cds',
        'total_landed_cost',
        'vat',
        'total',
        'remarks',
        'prepared_by_name',
        'prepared_by_designation',
        'reviewed_by_name',
        'reviewed_by_designation',
        'approved_name',
        'approved_designation',
    ];

    public function reportImages() {
        return $this->hasMany(ReportImage::class);
    }
}
