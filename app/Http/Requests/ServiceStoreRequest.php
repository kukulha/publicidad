<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceStoreRequest extends FormRequest
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
            'slug' => 'required|unique:services,slug',
            'stage_id' => 'required',
            'file' => 'nullable|mimes:jpg,jpeg,png',
            'file2' => 'nullable|mimes:jpg,jpeg,png',
        ];
    }
}
