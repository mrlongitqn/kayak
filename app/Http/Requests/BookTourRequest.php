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
            'email'=>'required|confirmed|email',
            'email_confirmation'=>'required|email',
            'phone'=>'required|numeric',
            'desired_start_date'=>'required|date',
            'number_of_adults'=>'required|numeric',
            'number_of_children_under4years_old'=>'required|numeric',
            'number_of_children_over4years_old'=>'required|numeric',

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