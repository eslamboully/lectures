<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Levels\Entities\LevelOne;

class User extends Model {
	protected $fillable = ['full_name', 'email', 'password', 'image','level'];

	protected $hidden = ['remeber_token', 'password'];

	public function getImageAttribute($image) {
		return 'public/upload/users/' . $image;
	}

}
