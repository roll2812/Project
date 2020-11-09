<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
            'name' => 'bail|required|min:10|max:255',
            'price' => 'required',
            'category_id' => 'required',
            'contents' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được phép để trống',
            'name.min' => 'Tên không được phép dưới 20 ký tự',
            'name.max' => 'Tên không được phép quá 255 ký tự',
            'price.required' => 'Giá không được phép để trống',
            'category_id.required' => 'Danh mục không được để trống',
            'contents.required' => 'Nội dung không được phép để trống'

        ];
    }
}
