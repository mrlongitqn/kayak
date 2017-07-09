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
use App\Http\Requests\TourRequest;
use Storage;

class TourController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::where('parent_id', 1)->pluck('name', 'id');

        if (isset($request->category))
            $tours = Tour::where('category_id', $request->category);
        if (isset($request->keyword))
            if (isset($tours))
                $tours = $tours->where('name', 'LIKE', '%' . $request->keyword . '%');
            else
                $tours = Tour::where('name', 'LIKE', '%' . $request->keyword . '%');

        if (isset($tours))
            $tours = $tours->orderBy('id', 'desc')->paginate(10);
        else
            $tours = Tour::orderBy('id', 'desc')->paginate(10);
        return view('admin.tour.index')->with('tours', $tours)->with('categories', $categories);
    }

    public function edit($id)
    {
        $files = Storage::files('images/icon');
        $data['services'] = $files;
        $data['categories'] = Category::where('parent_id', 1)->pluck('name', 'id');
        $data['tour'] = Tour::find($id);
        return view('admin.tour.edit', $data);
    }

    public function create()
    {
        $files = Storage::files('images/icon');
        $data['categories'] = Category::where('parent_id', 1)->pluck('name', 'id');
        $data['services'] = $files;
        return view('admin.tour.create', $data);
    }

    public function save($id, TourRequest $request)
    {
        if ($id != 0) {
            $tour = Tour::find($id);
            $tour->name = $request->name;
            $tour->tag = $request->tag;
            $tour->description = $request->description;
            $tour->category_id = $tour->category_id;
            if ($request->feature_deleted == 'deleted') {
                Storage::delete($tour->image_feature);
                $tour->image_feature = '';
            }
            if ($request->hasFile('image_feature')) {
                $image_feature = $request->image_feature->store('images/tours');
                $tour->image_feature = $image_feature;
            }
            $list_images = explode(',', $tour->images);
            $list_deleted = explode(',', $request->list_deleted);
            foreach ($list_deleted as $deleted) {
                $key = array_search($deleted, $list_images);
                if (gettype($key) == 'integer') {
                    unset($list_images[$key]);
                    Storage::delete($deleted);
                }
            }
            $images = '';
            if ($request->images != null) {
                foreach ($request->images as $image) {
                    $img = $image->store('images/tours');
                    $images = $images . ',' . $img;
                }
                $images = substr($images, 1);

            }
            $images = join(',', $list_images) . ',' . $images;
            $tour->images = $images;
            $tour->videos = $request->videos;
            $tour->intro = $request->intro;
            $tour->content = $request->content;
            $tour->pickup = $request->pickup;
            $tour->duration = $request->duration;
            $tour->services = $request->services;
            $tour->price = $request->price;
        } else {
            $tour = new Tour($request->all());
            $tour->image_feature = '';
            $tour->images = '';
            if ($request->hasFile('image_feature')) {
                $image_feature = $request->image_feature->store('images/tours');
                $tour->image_feature = $image_feature;
            }

            if ($request->images != null) {
                $images = '';
                foreach ($request->images as $image) {
                    $img = $image->store('images/tours');
                    $images = $images . ',' . $img;
                }
                $images = substr($images, 1);
                $tour->images = $images;
            }
        }
        $tour->status = 1;
        $tour->save();
        return redirect(url('admin/tour'));
    }

    public function delete(Request $request)
    {
        $tour = Tour::find($request->input('id'));
        if ($tour == null)
            return redirect(url('admin/tour'));
        //delete image feature
        Storage::delete($tour->image_feature);
        //delete images
        $images = explode(',', $tour->images);
        foreach ($images as $img) {
            Storage::delete($img);
        }
        $tour->delete();
        return redirect(url('admin/tour'));
    }
}