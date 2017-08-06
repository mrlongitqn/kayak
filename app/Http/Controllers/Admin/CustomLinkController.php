<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 30/07/2017
 * Time: 16:27
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\CustomLinkRequest;
use App\Models\CustomLink;

class CustomLinkController extends Controller
{
    public function index()
    {
        return view('admin.customlink.index')->with('slides', CustomLink::all());
    }

    public function create()
    {
        return view('admin.customlink.create');
    }


    public function edit($id)
    {
        $slide = CustomLink::find($id);
        if ($slide == null)
            return redirect(url('admin/custom-link'));
        return view('admin.customlink.edit')->with('slide', $slide);
    }


    public function save($id, CustomLinkRequest $request)
    {

        if ($id == 0) {
            $slide = new CustomLink($request->all());

        } else {
            $slide = CustomLink::find($id);
            $slide->name = $request->name;
            $slide->link = $request->link;
            $slide->category_id = $request->category_id;
        }
        $slide->status = 1;
        $slide->save();
        return redirect(url('admin/custom-link'));
    }

    public function delete(Request $request)
    {
        CustomLink::destroy($request->id);
        return redirect(url('admin/custom-link'));
    }
}