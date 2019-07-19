<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
	protected $fillable = ['full_name', 'phone', 'email', 'password', 'status', 'image', 'level'];

	protected $hidden = ['remeber_token', 'password'];

	public function getImageAttribute($image) {
		return 'public/upload/users/' . $image;
	}

}
