<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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

        if (request()->has('fullname')) {
            $rules['fullname'] = 'required|string|max:255';
        }
    
        if (request()->has('email')) {
            $rules['email'] = 'required|email';
        }
    
        if (request()->has('phone')) {
            $rules['phone'] = 'required|digits:10|starts_with:0';
        }
    
        return $rules;
    }
}
