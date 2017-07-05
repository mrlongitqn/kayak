<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 06/07/2017
 * Time: 05:07
 */

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Tour;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TourController extends Controller
{
    public function index(){
        $categories = Category::where('parent_id',1)->pluck('name', 'id');
        $tours = Tour::paginate(10);
        return view('admin.tour.index')->with('tours',$tours)->with('categories', $categories);
    }

    public function edit($id){
        $data['categories'] = Category::where('parent_id',1)->pluck('name', 'id');
        $data['tour'] = Tour::find($id);
        return view('admin.tour.edit', $data);
    }

    public function create(){
        $data['categories'] = Category::where('parent_id',1)->pluck('name', 'id');
        return view('admin.tour.create',$data);
    }

    public function save($id){

    }
}