<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 09/07/2017
 * Time: 19:02
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\SlideRequest;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        return view('admin.slide.index')->with('slides', Slide::all());
    }

    public function create(){
        return view('admin.slide.create');
    }

    public function edit($id){
        $slide = Slide::find($id);
        if($slide==null)
            return redirect(url('admin/slide'));
        return view('admin.slide.edit')->with('slide',$slide);
    }

    public function save($id, SlideRequest $request){
        if($id==0){
            //create
        }
        else{
            //edit
        }
        return redirect(url('admin/slide'));
    }
    public function delete(Request $request){
        Slide::destroy($request->id);
        return redirect(url('admin/slide'));
    }
}