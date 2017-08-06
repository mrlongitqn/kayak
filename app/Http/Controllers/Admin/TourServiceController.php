<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 30/07/2017
 * Time: 15:42
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\TourServiceRequest;
use App\Models\TourService;
use Illuminate\Support\Facades\Storage;

class TourServiceController extends Controller
{
    public function index()
    {
        return view('admin.tourservice.index')->with('slides', TourService::all());
    }

    public function create(){
        return view('admin.tourservice.create');
    }


    public function edit($id){
        $slide = TourService::find($id);
        if($slide==null)
            return redirect(url('admin/tourservice'));
        return view('admin.tourservice.edit')->with('slide',$slide);
    }


    public function save($id, TourServiceRequest $request){

        if($id==0){
            $slide = new TourService($request->all());
            $slide->image = $request->image->store('images/tour_service');

        }
        else{
            $slide = TourService::find($id);
            $slide->name = $request->name;
            $slide->link = $request->link;
            if($request->hasFile('image_new')){
                Storage::delete($slide->image);
                $slide->image = $request->image_new->store('images/tour_service');
            }
        }
        $slide->save();
        return redirect(url('admin/tourservice'));
    }
    public function delete(Request $request){
        TourService::destroy($request->id);
        return redirect(url('admin/tourservice'));
    }
}