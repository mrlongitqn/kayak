<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 06/08/2017
 * Time: 17:48
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'config';
    protected $fillable = ['id','company_name','contact_email', 'contact_email2', 'contact_phone', 'contact_phone2', 'contact_add', 'hotline'];
}