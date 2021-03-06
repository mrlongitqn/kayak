<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Slide;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function _render($content_layout, $view_data = [])
    {
        $files = Storage::files('images/icon');
        $view_data['services'] = $files;
        $view_data['categories'] = Category::where('parent_id', 1)->pluck('name', 'id');

        $view_data['category_menu'] = Category::where('parent_id',1)->get()->toArray();

        $view_data['slide_image'] = Slide::limit(4)->get()->toArray();

        return view($content_layout, $view_data);
    }
}
