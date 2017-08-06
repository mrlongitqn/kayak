<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookservice extends Model
{
    protected $table = 'bookservices';

    public function create($data){

        return $this->insert($data);

    }
}
