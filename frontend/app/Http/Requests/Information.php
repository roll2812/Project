<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Information extends FormRequest
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
            'fullName' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phoneNumber' => 'required|digits_between:10,12'
        ];
    }

    public function messages() {
      return  [
        'fullName.required' => 'Tên không được phép để trống',
        'email.required' => 'Email không được phép để trống',
        'address.required' => 'Địa chỉ không được phép để trống',
        'phoneNumber.required' => 'Số điện thoại không được phép để trống',
        'phoneNumber.digits_between:10,12' => 'Số điện thoại không hợp lệ',
      ];
    }
}
