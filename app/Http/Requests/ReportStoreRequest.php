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
            // 'description_as_found' => ['required', 'string'],
            'net_weight' => ['required', 'string', 'max:255'],
            'customs_value' => ['required', 'string', 'max:255'],
            'freight' => ['required', 'string', 'max:255'],
            'insurance' => ['required', 'string', 'max:255'],
            'dutiable_value' => ['required', 'string', 'max:255'],
            'exchange_rate' => ['required', 'string', 'max:255'],
            'exchange_rate' => ['required', 'string', 'max:255'],
            'dutiable_value_dv' => ['required', 'string', 'max:255'],
            'duty_rate' => ['required', 'string', 'max:255'],
            'customs_duty' => ['required', 'string', 'max:255'],
            'brokerage_fee' => ['required', 'string', 'max:255'],
            'arrastre' => ['required', 'string', 'max:255'],
            'warfage' => ['required', 'string', 'max:255'],
            'ipf' => ['required', 'string', 'max:255'],
            'cds' => ['required', 'string', 'max:255'],
            'total_landed_cost' => ['required', 'string', 'max:255'],
            'vat' => ['required', 'string', 'max:255'],
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
