<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class NewsRequest extends FormRequest
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

        // Kiểm tra và thêm quy tắc cho trường 'slug'
        if (request()->has('slug')) {
            $rules['slug'] = [
                'required',
                'string',
                'max:255',
                $id ? Rule::unique('news', 'slug')->ignore($id) : 'unique:news,slug',
            ];
        }

        // Kiểm tra và thêm quy tắc cho trường 'news_name_vi'
        if (request()->has('news_name_vi')) {
            $rules['news_name_vi'] = 'required|string|max:255';
        }

        // Kiểm tra và thêm quy tắc cho trường 'news_name_en'
        if (request()->has('news_name_en')) {
            $rules['news_name_en'] = 'required|string|max:255';
        }

        // Kiểm tra và thêm quy tắc cho trường 'fileToUpload'
        if (request()->has('fileToUpload')) {
            $rules['fileToUpload'] = 'nullable|mimes:png,jpg,jpeg|max:2048';
        }

        return $rules;
    }

    
    // public function messages(){
    //     // dd($this->all());
    //     return[
    //         'news_name_vi.max' => 'Tên không được quá 255 kí tự',
    //     ];
    // }


}