<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 06/08/2017
 * Time: 17:51
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return[
            'company_name'=>'required'
        ];
//        return [
//            'name' => 'required',
//            'link'=>'required',
//        ];
    }
}