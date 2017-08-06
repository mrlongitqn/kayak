<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 30/07/2017
 * Time: 16:47
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CustomLinkRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'link'=>'required',
        ];
    }
}