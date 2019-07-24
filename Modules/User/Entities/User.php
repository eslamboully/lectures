<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
	protected $fillable = ['full_name', 'phone', 'status', 'image', 'level'];

	public function getImageAttribute($image) {
		return 'public/upload/users/' . $image;
	}

}
