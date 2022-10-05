<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_song' => 'required',
            'link_song' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules. Tạo thông báo lỗi
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name_song.required' => 'Name song cannot blank',
            'link_song.required' => 'Link youtube of song cannot blank'
        ];
    }
}
