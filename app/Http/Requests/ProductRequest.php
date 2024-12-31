<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [];
        $id = $this->route('id');

        // Quy tắc cho trường 'slug'
        if (request()->has('slug')) {
            $rules['slug'] = [
                'required',
                'string',
                'max:255',
                $id ? Rule::unique('products', 'slug')->ignore($id) : 'unique:products,slug',
            ];
        }

        // Quy tắc cho trường 'product_name_vi'
        if (request()->has('product_name_vi')) {
            $rules['product_name_vi'] = 'required|string|max:255';
        }

        // Quy tắc cho trường 'product_name_en'
        if (request()->has('product_name_en')) {
            $rules['product_name_en'] = 'required|string|max:255';
        }

        // Quy tắc cho trường 'cate_id'
        if (request()->has('cate_id')) {
            $rules['cate_id'] = 'required';
        }

        // Quy tắc cho trường 'product_price'
        if (request()->has('product_price')) {
            $rules['product_price'] = 'required|integer|min:0';
        }

        // Quy tắc cho trường 'discount_percent'
        if (request()->has('discount_percent')) {
            $rules['discount_percent'] = 'required|integer|min:0|max:50';
        }

        return $rules;
    }

}
