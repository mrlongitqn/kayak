<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    /**
     * get list service car
     *
     * @param null $transfer_from
     * @param array $options
     * @return mixed
     */
    public function get_list($transfer_from = null, $options = []){

           $data = $this->select('*')
                        ->where('services.del_flg','=',1);

            if (!empty($transfer_from)){
               $data = $data->where('services.transfer_from','=',$transfer_from);
            }
            $data = $data->get();

            return $data;
    }

    public function get_detail($id =null) {
        if (empty($id)) {
            return [];
        }
       return $data = $this->select('*')
            ->where('services.del_flg','=',1)
            ->first();

    }

    public function create($data) {
        return $this->insert($data);
    }

    public function update_data($data, $id) {

       return $this->where("id",$id)
            ->update($data);
    }
}
