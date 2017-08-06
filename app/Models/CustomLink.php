<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 30/07/2017
 * Time: 16:25
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CustomLink extends Model
{
    protected $fillable = ['id',
        'category_id',
        'name',
        'link',
        'image',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $table = 'custom_link';
}