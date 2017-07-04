<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function get_list($category_id = null, $options = []){

        if (empty($category_id)){
            return [];
        }
        $list_tour = $this->select('news.Id','news.Name','news.Intro','news.ImageFeature','news.video','news.Content','news.CategoryId')
            ->leftJoin('Categories', 'news.CategoryId','Categories.Id')
            ->where('news.Status','=',0)
            ->where('categories.Status','=',0)
            ->where('news.CategoryId','=',$category_id);
        if (in_array('top',$options)) {
            $list_tour =  $list_tour->limit(1);
            return $list_tour->first()->toArray();
        }

        return $list_tour->get()->toArray();
    }
}
