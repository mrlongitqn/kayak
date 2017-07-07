<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';
<<<<<<< HEAD
    protected $fillable = ['id', 'name', 'tag', 'description', 'category_id', 'image_feature', 'images', 'videos', 'intro', 'content', 'pickup', 'duration', 'services', 'price', 'location', 'status'];
    
    public function get_list($category_id = null, $options = [])
    {
=======
    protected $filable = ['id', 'name', 'tag', 'description', 'category_id', 'image_feature', 'images', 'videos', 'intro', 'content', 'pickup', 'duration', 'services', 'price', 'location', 'status'];
>>>>>>> dde079c44f9890614fc7a9c914af9c33995ba4b7

    public function get_list($category_id = null, $options = []){

        $list_tour = $this->select('tours.*','categories.name as category_name')
            ->leftJoin('categories', 'tours.category_id','categories.id')
            ->where('tours.status','=',0)
            ->where('categories.status','=',0);


        if (empty($category_id)) {
            $list_tour =  $list_tour->limit(6);
        }else {
            $list_tour =  $list_tour->where('tours.category_id','=',$category_id);
            if (in_array('tour',$options)){
                $list_tour =  $list_tour->limit(3);

            }
        }
        $list_tour =  $list_tour->get();

        return (empty($list_tour)) ? [] :$list_tour->toArray();
    }

    public function get_detail($tour_id) {
        if (empty($tour_id)) {
            return [];
        }

        $tour = $this->select('tours.*', 'categories.name as category_name')
            ->leftJoin('categories', 'tours.category_id','categories.id')
            ->where('tours.status','=',0)
            ->where('categories.status','=',0)
            ->where('tours.id','=',$tour_id)
            ->first();
        return (empty($tour)) ? [] : $tour->toArray();
    }
}
