<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DomainStoreRequest extends FormRequest
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
        //dd(1);
        return [
            'label' => 'required|unique:domains,label,NULL,id,deleted_at,NULL'
        ];
    }

    public function messages()
    {
        return [
            'label.required' => 'المرجو إدخال إسم الشعبة',
            'label.unique' => 'شعبة موجودة من قبل'
        ];
    }
}
