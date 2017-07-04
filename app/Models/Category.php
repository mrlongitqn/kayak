<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function get_list($category_id = null, $options = []){

        if (empty($category_id)){
            return [];
        }
        return $this->select('categories.Id','categories.Name')
            ->where('categories.Status','=',0)
            ->where('categories.ParentId','=',$category_id)
            ->get()->toArray();
    }
}
