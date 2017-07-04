<?php

/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 04/07/2017
 * Time: 21:20
 */
namespace App\Http\Controllers\Admin;
use App\Category;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        $category =Category::all();
        return view("admin.category.index")->with("categories", $category);
    }

    public function create(){
        return view("admin.category.create");
    }
    public function edit($id){
        $data['cat'] = Category::find($id);
        return view('admin.category.edit', $data);
    }

    public function destroy(Request $request){
        $category = Category::find($request->input('id'));
        $category->delete();
        //DB::table('categories')->where('id', '=', $request->input('id'))->delete();
        return redirect(url('admin/category'));
    }
}