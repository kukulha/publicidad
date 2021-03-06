<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DirectoryUpdateRequest extends FormRequest
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
            'name' => 'required',
            'slug' => 'required|unique:directories,slug,' . $this->directory,
            'phone' => 'required',
            'address' => 'required',
            'cat_id' => 'required|integer',
            'file' => 'nullable|mimes:jpg,jpeg,png',
            'description' => 'required'
        ];
    }
}
