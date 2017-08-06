<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 30/07/2017
 * Time: 15:37
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TourService extends Model
{
    protected $table='tour_services';
    protected $fillable = ['id','name','image','link','created_at','updated_at'];

}