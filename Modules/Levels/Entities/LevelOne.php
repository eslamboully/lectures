<?php

namespace Modules\Levels\Entities;

use Illuminate\Database\Eloquent\Model;

class LevelOne extends Model
{
    protected $fillable = ['title','description','user_id'];

}
