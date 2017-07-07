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

class TourController extends Controller
{
    protected $tour;

    function __construct(Tour $tour, News $news, Category $category)
    {
        $this->tour = $tour;
        $this->news = $news;
        $this->category = $category;
    }

    public function index()
    {

        $categories = $this->category->get_list(1);

        if (!empty($categories)) {
            foreach ($categories as $category) {

                $list_tours[$category['name']] = $this->tour->get_list($category['id'], ['tour']);
            }
        }

        return $this->_render("tour/alltours", [
            'list_tours' => $list_tours
        ]);
    }

    public function get_list_by_category($category_id)
    {

        if (empty($category_id)) {
            return false;
        }

        $tours = $this->tour->get_list($category_id);

        return $this->_render("tour/tour_category", [
            'list_tours' => $tours
        ]);
    }

    public function get_detail($tour_id)
    {
        if (empty($tour_id)) {
            return false;
        }

        $tour_detail = $this->tour->get_detail($tour_id);

        return $this->_render("tour/tour_detail", [
            'tour_detail' => $tour_detail
        ]);

    }
}