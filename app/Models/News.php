<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'id',
        'name',
        'tag',
        'description',
        'type',
        'category_id',
        'image_feature',
        'videos',
        'intro',
        'content',
        'status',
        'created_at',
        'updated_at'
    ];

    public function get_list($category_id = null, $options = [])
    {

        if (empty($category_id)) {
            return [];
        }
        $list_tour = $this->select('news.id', 'news.name', 'news.intro', 'news.image_feature', 'news.videos', 'news.content', 'news.category_id')
            ->leftJoin('categories', 'news.category_id', 'categories.id')
            ->where('news.Status', '=', 1)
            ->where('categories.status', '=', 1)
            ->where('news.category_id', '=', $category_id);
        if (in_array('top', $options)) {
            $list_tour = $list_tour->limit(3);
            $list_tour = $list_tour->orderBy('id','desc')->get();

            return (empty($list_tour)) ? [] : $list_tour->toArray();
        }

        $list_tour = $list_tour->orderBy('id','desc')->get();

        return (empty($list_tour)) ? [] : $list_tour->toArray();
    }
    public function getById($id){
        return $this->find($id);
    }

}
