<?php
/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 06/08/2017
 * Time: 17:50
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{

    public function GetConfig(){
        $config = Config::first();
        return view('admin.config.config')->with('config', $config);
    }
    public function UpdateConfig($id, Request $request){
        $config = Config::first();
        $config->company_name = $request->company_name;
        $config->contact_email = $request->contact_email;
        $config->contact_email2 = $request->contact_email2;
        $config->contact_phone = $request->contact_phone;
        $config->contact_phone2 = $request->contact_phone2;
        $config->contact_add = $request->contact_add;
        $config->update();
        return redirect()->action('Admin\ConfigController@GetConfig');
    }
}