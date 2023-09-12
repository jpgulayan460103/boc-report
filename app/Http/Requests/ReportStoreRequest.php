<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'identification' => ['required', 'string', 'max:255'],
            'consignee' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string'],
            'container_numbers' => ['required', 'string'],
            'bill_of_lading_number' => ['required', 'string', 'max:255'],
            'examination_date' => ['required', 'date'],
            'description_as_declared' => ['required', 'string'],
            'description_as_found' => ['required', 'string'],
            'net_weight' => ['required', 'numeric'],
            'customs_value' => ['required', 'numeric'],
            'freight' => ['required', 'numeric'],
            'insurance' => ['required', 'numeric'],
            'dutiable_value' => ['required', 'numeric'],
            'exchange_rate' => ['required', 'string', 'max:255'],
            'exchange_rate' => ['required', 'numeric'],
            'dutiable_value_dv' => ['required', 'numeric'],
            'duty_rate' => ['required', 'string', 'max:255'],
            'customs_duty' => ['required', 'numeric'],
            'brokerage_fee' => ['required', 'numeric'],
            'arrastre' => ['required', 'numeric'],
            'warfage' => ['required', 'numeric'],
            'ipf' => ['required', 'numeric'],
            'cds' => ['required', 'numeric'],
            'total_landed_cost' => ['required', 'numeric'],
            'vat' => ['required', 'numeric'],
            'total' => ['required', 'string'],
            'remarks' => ['required', 'string'],
            'prepared_by_name' => ['required', 'string', 'max:255'],
            'prepared_by_designation' => ['required', 'string', 'max:255'],
            'reviewed_by_name' => ['required', 'string', 'max:255'],
            'reviewed_by_designation' => ['required', 'string', 'max:255'],
            'approved_name' => ['required', 'string', 'max:255'],
            'approved_designation' => ['required', 'string', 'max:255'],
        ];
    }
}
