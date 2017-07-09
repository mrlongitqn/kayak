<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 06/07/2017
 * Time: 05:07
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tour;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Requests\TourRequest;
use Storage;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::orderBy('id', 'desc')->paginate(10);

        $user = $user->toArray();

//        dd($user['data']);
        return $this ->_render('admin.user.index',['users' => $user['data']]);
    }

    public function edit($id)
    {
        $data = User::find($id)->toArray();

//        dd($data);
        return $this->_render('admin.user.edit',['user' => $data]);
    }

    public function save() {

    }

    public function delete(Request $request)
    {
        $user = User::find($request->input('id'));
        if ($user == null)
            return redirect(url('admin/user'));
        //delete image feature
        $user->delete();
        return redirect(url('admin/user'));
    }
}