<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookServiceRequest;
use App\Models\Bookservice;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    function __construct(Service $service,Bookservice $bookservice)
    {
        $this->service = $service;
        $this->bookservice = $bookservice;
    }
    /**
     * Show the service
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_car_da_nang = $this->service->get_list(1);
        $service_car_hoi_an = $this->service->get_list(2);

        $view_data = [
            'da_nang' => $service_car_da_nang,
            'hoi_an' => $service_car_hoi_an
        ];

        return $this->_render('service/index',$view_data);
    }

    public function detail($id){

    }

    /**
     *  Form book service
     */
    public function bookservice(BookServiceRequest $request) {

        if ($request->isMethod('POST')) {

            $route_id = $request->input('route');
            $route_name = $this->service->get_detail($route_id);


            $data = $request->except('_token', 'email_confirmation','route');
            $data['service_id'] = $route_id;
            $data['route'] = $route_name->route;
            $data['status'] = 0;
            $data['ip'] = $request->ip();
            $result = $this->bookservice->create($data);

            if ($result) {
                return view('booktour.success');
            }
        }
        $service_car = $this->service->get_list();

        $view_data['service_car'] = $service_car;
        return $this->_render('service/bookservice',$view_data);
    }


}
