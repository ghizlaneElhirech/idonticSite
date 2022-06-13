<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVisitor extends FormRequest
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
             'full_name' => 'required',
             'email' => 'required',
             'sujet' => 'required',
             'message' => 'required',
             'type_id' => 'required',
        ];
    }
    
     public function messages()
    {
        return [
            'full_name.required' => 'validation.required',
            'email.required' => 'validation.required',
            'sujet.required' => 'validation.required',
            'message.required' => 'validation.required',
            'type_id.required' => 'validation.required',
           
        ];
    }
}
