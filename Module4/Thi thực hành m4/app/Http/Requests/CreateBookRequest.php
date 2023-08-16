<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'ISBN' => 'required|string|max:20|unique:books',
            'author' => 'required|in:author1,author2,author3,author4,author5',
            'category' => 'required|in:category1,category2,category3,category4,category5',
            'number_of_pages' => 'required|integer',
            'publishing_year' => 'required|integer|max:' . date('Y'),
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'Tên sách là trường bắt buộc.',
        'name.string' => 'Tên sách phải là chuỗi.',
        'name.max' => 'Tên sách không được vượt quá 255 ký tự.',
        'ISBN.required' => 'ISBN là trường bắt buộc.',
        'ISBN.string' => 'ISBN phải là chuỗi.',
        'ISBN.max' => 'ISBN không được vượt quá 20 ký tự.',
        'ISBN.unique' => 'ISBN đã tồn tại.',
        'author.required' => 'Tác giả là trường bắt buộc.',
        'author.in' => 'Tác giả không hợp lệ.',
        'category.required' => 'Thể loại là trường bắt buộc.',
        'category.in' => 'Thể loại không hợp lệ.',
        'number_of_pages.required' => 'Số trang là trường bắt buộc.',
        'number_of_pages.integer' => 'Số trang phải là số nguyên.',
        'publishing_year.required' => 'Năm xuất bản là trường bắt buộc.',
        'publishing_year.integer' => 'Năm xuất bản phải là số nguyên.',
        'publishing_year.max' => 'Năm xuất bản không được vượt quá năm hiện tại.',
    ];
}
}
