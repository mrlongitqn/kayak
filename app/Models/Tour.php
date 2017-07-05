<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';

    public function get_list($category_id = null, $options = []){

       $list_tour = $this->select('tours.Id','tours.Name','tours.Description','tours.Intro','tours.Price','categories.Name as CategoryName','tours.ImageFeature','tours.CategoryId','tours.PickUp','tours.Duration','tours.Services')
            ->leftJoin('Categories', 'tours.CategoryId','Categories.Id')
            ->where('tours.Status','=',0)
            ->where('categories.Status','=',0);


       if (empty($category_id)) {
           $list_tour =  $list_tour->limit(6);
       }else {
           $list_tour =  $list_tour->where('tours.CategoryId','=',$category_id);
           if (in_array('tour',$options)){
               $list_tour =  $list_tour->limit(3);

           }
       }

       return $list_tour->get()->toArray();
    }

    public function get_detail($tour_id) {
        if (empty($tour_id)) {
            return [];
        }

        return $this->select('tours.*', 'categories.Name as CategoryName')
                ->leftJoin('Categories', 'tours.CategoryId','Categories.Id')
                ->where('tours.Status','=',0)
                ->where('categories.Status','=',0)
                ->where('tours.Id','=',$tour_id)
                ->first()->toArray();
    }
}
