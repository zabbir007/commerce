<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'productName' => 'required',
            'productImage' => 'required',
            'productDescription' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'productName.required' => 'Please Enter Product Name',
            'productImage.required' => 'Please Select Product Image',
            'productDescription.required' => 'Please Enter Product Description',
            
        ];
    }
}
