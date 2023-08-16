<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'order_date' => 'required',
            'delivery_date' => 'required',
            'total_amount' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'order_date.required' =>'Please select order_date',
            'delivery_date.required' =>'Please select delivery_date',
            'total_amount.required' =>'Please enter total_amount',
            'total_amount.numeric' =>'The total must be a number',
        ];
    }
}
