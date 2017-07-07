<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booktour extends Model
{
    protected $table = 'booktours';

    public function create($data){

        return $this->insert($data);

    }
}
