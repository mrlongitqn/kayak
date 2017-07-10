<?php
/**
 * Created by PhpStorm.
 * User: mrlon
 * Date: 10/07/2017
 * Time: 08:44
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'email'=>'required',
            'password'=>'string|min:6',
        ];
    }
}