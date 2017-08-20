<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookservice extends Model {
	protected $table = 'bookservices';
	protected $fillable = [
		'id',
		'fullname',
		'phone',
		'email',
		'service_id',
		'route',
		'date_of_service',
		'places_of_pick_up',
		'time_of_pick_up',
		'number_of_adults',
		'number_of_children',
		'your_request',
		'ip',
		'created_at',
		'updated_at',
		'status'
	];

	public function create( $data ) {

		return $this->insert( $data );

	}
}
