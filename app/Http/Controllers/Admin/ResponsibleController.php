<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 09/07/2017
 * Time: 17:52
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use Storage;

class ResponsibleController extends Controller
{
    public function index(Request $request)
    {
        $responsibles = News::where('category_id', 3);
        if (isset($request->keyword))
            $responsibles = $responsibles->where('name', 'LIKE', '%' . $request->keyword . '%');
        $responsibles = $responsibles->paginate(10);
        return view('admin.responsible.index')->with('responsibles', $responsibles);
    }

    public function create(){
        return view('admin.responsible.create');
    }

    public function edit($id){
        $res = News::find($id);
        if($res== null)
            return redirect(url('admin/responsible'));
        return view('admin.responsible.edit')->with('responsible', $res);
    }

    public function save($id, NewsRequest $request){
        if($id==0){
            $news = new News($request->except('_token'));
            $images = '';
            if ($request->image_feature != null) {
                foreach ($request->image_feature as $image) {
                    $img = $image->store('images/project');
                    $images = $images . ',' . $img;
                }
                $images = substr($images, 1);
            }
            $news->image_feature = $images;
            $news->type = 'top';
            $news->category_id = 3;
            $news->status = 1;
        }else{
            $news = News::find($id);
            if ($news==null)
                return redirect(url('admin/responsible'));
            $list_images = explode(',', $news->image_feature);
            $list_deleted = explode(',', $request->list_deleted);
            foreach ($list_deleted as $deleted) {
                $key = array_search($deleted, $list_images);
                if (gettype($key) == 'integer') {
                    unset($list_images[$key]);
                    Storage::delete($deleted);
                }
            }
            $images = '';
            if ($request->image_feature != null) {
                foreach ($request->image_feature as $image) {
                    $img = $image->store('images/project');
                    $images = $images . ',' . $img;
                }
                $images = substr($images, 1);

            }
            $images = join(',', $list_images) . ',' . $images;
            $news->image_feature = $images;
            $news->name = $request->name;
            $news->tag = $request->tag;
            $news->description = $request->description;
            $news->videos = $request->videos;
            $news->intro = $request->intro;
            $news->content= $request->content;
        }
        $news->save();
        return redirect(url('admin/responsible'));
    }

    public function delete(Request $request){
        News::destroy($request->id);
        return redirect(url('admin/responsible'));
    }
}