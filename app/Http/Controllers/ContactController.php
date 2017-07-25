<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 02/07/2017
 * Time: 09:19
 */

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\News;
use App\Models\Tour;

class ContactController extends Controller
{
  public function index()
    {
        return $this->_render("contact/index");
    }
}