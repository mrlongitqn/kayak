<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 30/07/2017
 * Time: 15:58
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class TourServiceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'image'=>'required',
        ];
    }
}