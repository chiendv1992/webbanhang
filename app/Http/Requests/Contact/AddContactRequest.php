<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class AddContactRequest extends FormRequest
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
            'name' =>'required',
            'address' =>'required',
            'phone' =>'required',
            'contents' =>'required',
            'email' =>'email'
        ];
    }
//    public function messages()
//    {
//        return [
//            'category.required' => 'Bạn Chưa Nhập Tên Category',
//            'category.unique' => 'Tên Category đã tồn taij',
//            'status.required' => 'Bạn chưa chọn trạng thái',
//        ];
//    }
}
