<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booktour extends Model
{
    protected $table = 'booktours';
    protected $fillable = [
        'id',
        'tour_id',
        'tour_name',
        'fullname',
        'phone',
        'email',
        'would_you_like_to_go_on_a',
        'desired_start_date',
        'number_of_adults',
        'number_of_children_under4years_old',
        'number_of_children_over4years_old',
        'any_special_requests',
        'ip',
        'status',
        'created_at',
        'updated_at'
    ];

    public function create($data)
    {

        return $this->insert($data);

    }
}
