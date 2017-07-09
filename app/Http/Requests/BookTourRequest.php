<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 09/07/2017
 * Time: 12:29
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class BookTourRequest extends FormRequest
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

    public function rules()
    {

        return [

            'fullname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'desired_start_date'=>'required',
            'number_of_adults'=>'required',

        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => 'Please input Full Name!',
            'email.required' => 'Please input Email',
            'desired_start_date.required' => 'Please choose Desired start date',
        ];
    }
}