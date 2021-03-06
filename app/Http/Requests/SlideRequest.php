<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 09/07/2017
 * Time: 19:03
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class SlideRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'caption'=>'required',
            'image'=>'required',
        ];
    }
}