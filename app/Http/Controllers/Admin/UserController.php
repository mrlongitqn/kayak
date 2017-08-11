<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 06/07/2017
 * Time: 05:07
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::orderBy('id', 'desc')->paginate(10);

        $user = $user->toArray();
        return $this->_render('admin.user.index', ['users' => $user['data']]);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function edit($id)
    {
        $data = User::find($id)->toArray();
        return $this->_render('admin.user.edit', ['user' => $data]);
    }

    public function save($id, UserRequest $request)
    {
        if ($id == 0) {
            //create
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
        } else {
            //update
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->new_password != '') {
                $user->password = bcrypt($request->new_password);
            }

            $user->save();
        }
        return redirect(url('admin/user'));
    }

    public function delete(Request $request)
    {
        if ($request->id == 0) {
            Session::flash('message', "You can not delete administrator");
            return redirect(url('admin/user'));
        }

        $currentId = Auth::User()->id;
        if ($currentId == $request->id) {
            Session::flash('message', "You can not delete yourself");
            return redirect(url('admin/user'));
        }
        $user = User::find($request->input('id'));
        if ($user == null)
            return redirect(url('admin/user'));
        $user->delete();
        return redirect(url('admin/user'));
    }

    public function getUpdatePassword()
    {
        return view('admin.user.update_pass');
    }

    public function postUpdatePassword(Request $request)
    {
        $user = Auth::User();

        $current_password = Auth::User()->password;
        if(!Hash::check($request->old_password, $current_password))
        {
            Session::flash('message', "Old password is wrong");
            return redirect()->action('Admin\UserController@getUpdatePassword');
        }

        if ($request->new_pass != $request->new_pass2) {
            Session::flash('message', "New password not match");
            return redirect()->action('Admin\UserController@getUpdatePassword');
        }
        $new = bcrypt($request->new_pass);
        $user->password = $new;
        $user->save();
        Session::flash('message', "Password is update successfully");
        return redirect()->action('Admin\UserController@getUpdatePassword');
    }
}