<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 02/07/2017
 * Time: 09:19
 */

namespace App\Http\Controllers;


use App\Category;
use App\Models\Tour;
use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class TopController extends Controller
{
    protected $tour;

    function __construct(Tour $tour, News $news)
    {
        $this->tour = $tour;
        $this->news = $news;
    }

    public function index(){

        $tours = $this->tour->get_list();

        $project = $this->news->get_list(3,['top']);

        return $this->_render("top/index",[
            'tours' => $tours,
            'project' => $project
        ]);
    }
}