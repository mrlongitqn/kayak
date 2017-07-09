<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'parent_id', 'tag', 'description','status','created_at', 'updated_at'];

    public function get_list($category_id = null, $options = []){

        if (empty($category_id)){
            return [];
        }
        return $this->select('categories.id','categories.name')
            ->where('categories.status','=',1)
            ->where('categories.parent_id','=',$category_id)
            ->get()->toArray();
    }
}
