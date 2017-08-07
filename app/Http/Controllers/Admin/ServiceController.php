<?php

/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 04/07/2017
 * Time: 21:20
 */
namespace App\Http\Controllers\Admin;

//use App\Http\Requests\ServiceRequest;
use App\Http\Requests\ServiceRequest;
use App\Models\Category;
use App\Http\Requests\CheckCategoryRequest;
use App\Models\Service;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $service_car_da_nang = $this->service->get_list(1);
        $service_car_hoi_an = $this->service->get_list(2);

        $view_data = [
            'da_nang' => $service_car_da_nang,
            'hoi_an' => $service_car_hoi_an
        ];
        return view("admin.service.index")->with($view_data);
    }

    public function register(ServiceRequest $request)
    {

        if ($request->isMethod('POST')) {


            $data = $request->except('_token');
            $data['del_flg'] = 1;

            $result = $this->service->create($data);

            if ($result) {
                return redirect(url('/admin/service'));
            }
        }

        return view("admin.service.create");
    }

    public function edit(ServiceRequest $request, $id)
    {
        if ($request->isMethod('POST')) {


            $data = $request->except('_token');
            $data['del_flg'] = 1;

            $result = $this->service->update_data($data,$id);

            if ($result) {
                return redirect(url('/admin/service'));
            }
        }

        $service = $this->service->get_detail($id);
        return view('admin.service.edit')->with('data', $service);
    }

    public function destroy(Request $request)
    {
        $category = Service::find($request->input('id'));
        $category->delete();
        return redirect(url('admin/service'));
    }
}