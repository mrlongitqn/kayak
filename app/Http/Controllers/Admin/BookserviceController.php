<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 09/07/2017
 * Time: 11:50
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Bookservice;
use App\Models\Booktour;
use Illuminate\Http\Request;

class BookserviceController extends Controller
{
    public function index(Request $request)
    {
        if(isset($request->keyword))
            $booking = Bookservice::orWhere('fullname','like','%'.$request->keyword.'%')
                ->orWhere('route','like','%'.$request->keyword.'%')
                ->orWhere('phone','like','%'.$request->keyword.'%')
                ->orWhere('email','like','%'.$request->keyword.'%')
                ->orderBy('id','desc');
       if(isset($booking))
        $booking = $booking->paginate('10');
       else
           $booking = Bookservice::orderBy('id','desc')->paginate(10);
        return view('admin.bookservice.index')->with('booking', $booking);
    }

    public function detail($id){
        $booking = Bookservice::find($id);
        if($booking==null){
            return redirect(url('admin/bookservice/'));
        }
        return view('admin.bookservice.detail')->with('booking',$booking);
    }

    public function resolved($id){
        $booking = Bookservice::find($id);
        if($booking==null){
            return redirect(url('admin/bookservice/'));
        }
        $booking->status = 1;
        $booking->save();
        return redirect(url('admin/bookservice/'));
    }

    public function delete(Request $request){
        $booking = Bookservice::find($request->id);
        $booking->delete();
        return redirect(url('admin/bookservice/'));
    }
}