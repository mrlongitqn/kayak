<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';
    protected $fillable = ['id', 'name', 'tag', 'description', 'category_id', 'image_feature', 'images', 'videos', 'intro', 'content', 'pickup', 'duration', 'services', 'price', 'location', 'status'];
    
    public function get_list($category_id = null, $options = [])
    {

        $list_tour = $this->select('tours.id', 'tours.name', 'tours.description', 'tours.intro', 'tours.price', 'categories.name as CategoryName', 'tours.image_feature', 'tours.category_id', 'tours.pickup', 'tours.duration', 'tours.services')
            ->leftJoin('categories', 'tours.category_id', 'categories.Id')
            ->where('tours.status', '=', 0)
            ->where('categories.status', '=', 0);


        if (empty($category_id)) {
            $list_tour = $list_tour->limit(6);
        } else {
            $list_tour = $list_tour->where('tours.categoryId', '=', $category_id);
            if (in_array('tour', $options)) {
                $list_tour = $list_tour->limit(3);
            }
        }

        return $list_tour->get()->toArray();
    }

    public function get_detail($tour_id)
    {
        if (empty($tour_id)) {
            return [];
        }

        return $this->select('tours.*', 'categories.name as CategoryName')
            ->leftJoin('categories', 'tours.category_id', 'categories.id')
            ->where('tours.status', '=', 0)
            ->where('categories.status', '=', 0)
            ->where('tours.id', '=', $tour_id)
            ->first()->toArray();
    }
}
