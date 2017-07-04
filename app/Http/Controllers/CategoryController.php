<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 02/07/2017
 * Time: 09:19
 */

namespace App\Http\Controllers;


use App\Category;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view("admin.category.index")->with("categories", $category);
    }

    public function edit($id){
        $data['cat'] = Category::find($id);
        return view('admin.category.edit', $data);
    }
}