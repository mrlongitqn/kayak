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

class BookServiceRequest extends FormRequest
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

            'fullname'=>'required',
            'email'=>'required|confirmed|email',
            'email_confirmation'=>'required|email',
            'phone'=>'required|numeric',
            'route'=>'required',
            'date_of_service'=>'required|date',
            'places_of_pick_up'=>'required',
            'time_of_pick_up'=>'required',
            'number_of_adults'=>'required|numeric',
            'number_of_children'=>'required|numeric',

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