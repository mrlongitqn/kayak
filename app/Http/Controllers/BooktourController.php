<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 02/07/2017
 * Time: 09:19
 */

namespace App\Http\Controllers;


use App\Http\Requests\BooktourRequest;
use App\Models\Booktour;
use App\Models\Tour;
use App\Models\News;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BooktourController extends Controller
{
    protected $tour;

    function __construct(Tour $tour, News $news, Category $category, Booktour $booktour)
    {
        $this->tour = $tour;
        $this->news = $news;
        $this->category = $category;
        $this->booktour = $booktour;
    }

    public function index($id, Request $request){

        $tour_name = $this->tour->get_detail($id)['name'];

        if ($request->isMethod('get')){
            return $this->_render("booktour/index",['tour_name' => $tour_name, 'tour_id' => $id]);
        }

        if ($request->isMethod('post')) {
            $data =  $request->except('_token','email-confirm','contact');
            $data['tour_id'] = 1;
            $data['tour_name'] = $tour_name;
            $data['status'] = 0;
            $ldate = date('Y-m-d H:i:s');
            $data['created_at'] = $ldate;

            $result = $this->booktour->create($data);

            if ($result) {
                return redirect(url('/'));
            }
        }

    }
}