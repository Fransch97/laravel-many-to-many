<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>"required | min:5 | max:120",
            'content'=>"required | min:3 | max:255",
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>"Campo obbligatorio",
            'title.min'=>"Minimo :min caratteri",
            'title.max'=>"Maassimo :max caratteri",
            'content.required'=>"Campo obbligatorio",
            'content.min'=>"Minimo :min caratteri",
            'content.max'=>"Maassimo :max caratteri",
        ];
    }
}
