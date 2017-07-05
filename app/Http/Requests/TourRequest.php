<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 06/07/2017
 * Time: 05:08
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class TourRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'category_id'=>'required'
        ];
    }
}