<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class CategoryStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cname' => 'required|max:255',
            'ename' => 'max:255',
        ];
    }

    public function messages()
    {
        return [
            'cname.required' => '中文名稱為必填',
            'cname.max' => '中文名稱不能超過 255 個字',
            'ename.max'  => '英文名稱不能超過 255 個字',
        ];
    }
}
