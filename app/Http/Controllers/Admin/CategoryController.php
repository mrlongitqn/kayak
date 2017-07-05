<?php

/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 04/07/2017
 * Time: 21:20
 */
namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Requests\CheckCategoryRequest;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view("admin.category.index")->with("categories", $category);
    }

    public function create()
    {
        $category = Category::where('parent_id', '=', '0')->pluck('name', 'id');
        return view("admin.category.create")->with('parent_id', $category);
    }

    public function postSave($id, CheckCategoryRequest $request)
    {
        if($id!=0){
           $category = Category::find($id);

        }else{
            $category = new Category();
        }
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->tag = $request->tag;
        $category->description = $request->description;
        $category->status = 1;
        $category->save();
        return redirect(url('admin/category'));
    }

    public function edit($id)
    {
        $list_category = Category::where('parent_id', '=', '0')->pluck('name', 'id');

        $category = Category::find($id);
        return view('admin.category.edit')->with('category', $category)->with('parent_id', $list_category);
    }

    public function destroy(Request $request)
    {
        $category = Category::find($request->input('id'));
        $category->delete();
        return redirect(url('admin/category'));
    }
}