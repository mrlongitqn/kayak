<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{

    /**
     * Show the service
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->_render('service/index');
    }

    /**
     *  Form book service
     */
    public function bookservice() {
        return $this->_render('service/bookservice');
    }
}
