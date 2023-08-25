<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeStoreRequest extends FormRequest
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
            'deskripsi' => 'required',
            'deskripsi2' => 'required',
            
        ];
    }

    function messages(){
        return [
            'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
            'deskripsi2.required' => 'Deskripsi Tidak Boleh Kosong',
           
        ];
    }
}