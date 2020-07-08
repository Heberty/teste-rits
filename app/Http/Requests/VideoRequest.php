<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'title' => 'required|string',
            'text'  => 'required|string',
            'embed' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Informe um título',
            'title.string'   => 'O campo só aceita string',
            'embed.required' => 'Informe um embed',
            'embed.string'   => 'O campo só aceita string'
        ];
    }
}
