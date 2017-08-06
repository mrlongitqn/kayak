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
use App\Models\Category;
use App\Models\News;
use App\Models\Tour;
use Illuminate\Http\Request;

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

    public function getIndex($id)
    {

        $tour_name = $this->tour->get_detail($id)['name'];
        return $this->_render("booktour/index", ['tour_name' => $tour_name, 'tour_id' => $id]);
    }

    public function index($id, BooktourRequest $request)
    {
        $tour_name = $this->tour->get_detail($id)['name'];

        $data = $request->except('_token', 'email_confirmation');
        $data['tour_id'] = $id;
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