<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 09/07/2017
 * Time: 11:50
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Booktour;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        if(isset($request->keyword))
            $booking = Booktour::orWhere('fullname','like','%'.$request->keyword.'%')
                ->orWhere('tour_name','like','%'.$request->keyword.'%')
                ->orWhere('phone','like','%'.$request->keyword.'%')
                ->orWhere('email','like','%'.$request->keyword.'%')
                ->orderBy('id','desc');
       if(isset($booking))
        $booking = $booking->paginate('10');
       else
           $booking = Booktour::orderBy('id','desc')->paginate(10);
        return view('admin.booking.index')->with('booking', $booking);
    }

    public function detail($id){
        $booking = Booktour::find($id);
        if($booking==null){
            return redirect(url('admin/booking/'));
        }
        return view('admin.booking.detail')->with('booking',$booking);
    }

    public function resolved($id){
        $booking = Booktour::find($id);
        if($booking==null){
            return redirect(url('admin/booking/'));
        }
        $booking->status = 1;
        $booking->save();
        return redirect(url('admin/booking/'));
    }

    public function delete(Request $request){
        $booking = Booktour::find($request->id);
        $booking->delete();
        return redirect(url('admin/booking/'));
    }
}