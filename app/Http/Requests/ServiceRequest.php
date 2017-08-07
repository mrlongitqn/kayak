<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 09/07/2017
 * Time: 12:29
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ServiceRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules(Request $request)
    {

        if ($request->isMethod('GET')) {
            return [];
        }

        return [
            'transfer_from'=>'required',
            'route'=>'required',
            'distance'=>'required|numeric',
            'duration'=>'required|numeric',
            'price_4seat'=>'required|numeric',
            'price_7seat'=>'required|numeric',
            'price_16seat'=>'required|numeric',

        ];
    }
    public function messages()
    {
        return [
        ];
    }
}