<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 02/07/2017
 * Time: 09:19
 */

namespace App\Http\Controllers;


use App\Models\Tour;
use App\Models\News;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class ProjectController extends Controller
{
    protected $tour;

    function __construct(Tour $tour, News $news, Category $category)
    {
        $this->tour = $tour;
        $this->news = $news;
        $this->category = $category;
    }

    public function get_list(){
        $project = $this->news->get_list(3);

        return $this->_render("project/index",[
            'projects' => $project
        ]);
    }
}