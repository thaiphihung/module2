<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|min:2|max:50',
            'slug' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'status' => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'You have not entered your name',
            'name.min' => 'You must enter more than 2 characters',
            'name.max' => 'The name you entered is too long',
            'slug.required' => 'You have not entered the slug',
            'price.required' => 'You have not entered the price',
            'price.numeric' => 'Price must be number',
            'quantity.required' => 'You have not entered the quantity',
            'quantity.numeric' => 'Quantity must be number',
            'status.required' => 'You have not selected a status',
        ];
    }
}
