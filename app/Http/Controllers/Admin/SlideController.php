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
use Storage;

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
            $slide = new Slide($request->all());
            $slide->image = $request->image->store('images/slides');
            $slide->type = 0;
            $slide->sort = 0;
            $slide->status = 0;
        }
        else{
            $slide = Slide::find($id);
            $slide->name = $request->name;
            $slide->caption = $request->caption;
            if($request->hasFile('image_new')){
                Storage::delete($slide->image);
                $slide->image = $request->image_new->store('images/slides');
            }
        }
        $slide->save();
        return redirect(url('admin/slide'));
    }
    public function delete(Request $request){
        Slide::destroy($request->id);
        return redirect(url('admin/slide'));
    }
}