<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !is_null(auth()->user());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->method() == 'PUT') {
            return [
                //'price' => 'required',
            ];
        }
        return [
            'name' => 'required|unique:products',
            'slug' => 'required|unique:products',
            'description' => 'required',
            'price' => 'required',
        ];
    }
}
