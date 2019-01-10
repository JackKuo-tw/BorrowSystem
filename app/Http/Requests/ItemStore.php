<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class ItemStore extends FormRequest
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
            'description' => 'max:1000',
            'photo' => 'mimes:jpeg,png,jpg,gif,svg|max:10000',
            'cid' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'cid.required' => '類別是必填',
            'cname.required' => '中文名稱為必填',
            'cname.max' => '中文名稱不能超過 255 個字',
            'ename.max'  => '英文名稱不能超過 255 個字',
        ];
    }
}
