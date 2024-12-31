<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PolicyRequest extends FormRequest
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
                $id ? Rule::unique('policy', 'slug')->ignore($id) : 'unique:policy,slug',
            ];
        }

        // Quy tắc cho trường 'poli_name_vi'
        if (request()->has('poli_name_vi')) {
            $rules['poli_name_vi'] = 'required|string|max:255';
        }

        // Quy tắc cho trường 'poli_name_en'
        if (request()->has('poli_name_en')) {
            $rules['poli_name_en'] = 'required|string|max:255';
        }

        // Quy tắc cho trường 'fileToUpload'
        if (request()->has('fileToUpload')) {
            $rules['fileToUpload'] = 'nullable|mimes:png,jpg,jpeg|file|max:2048';
        }

        return $rules;
    }

}
