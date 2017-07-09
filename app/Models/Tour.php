<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';
    protected $fillable = ['id', 'name', 'tag', 'description', 'category_id', 'image_feature',
        'images', 'videos', 'intro', 'content', 'pickup', 'duration', 'services', 'price', 'location', 'status','created_at', 'updated_at'];

    public function get_list($category_id = null, $options = []){
        $list_tour = $this->select('tours.*','categories.name as category_name')
            ->leftJoin('categories', 'tours.category_id','categories.id')
            ->where('tours.status','=',1)->orderBy('tours.id','desc')
            ->where('categories.status','=',1);


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
            ->where('tours.status','=',1)
            ->where('categories.status','=',1)
            ->where('tours.id','=',$tour_id)
            ->first();
        return (empty($tour)) ? [] : $tour->toArray();
    }
}
