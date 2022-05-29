<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainNavCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:main_navs,name,except,id|max:10',
            'link' => 'required|unique:main_navs,name,except,id',
            'visible' => 'required',
            'order' => 'required',
        ];
    }
}
