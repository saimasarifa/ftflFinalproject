<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model {
    protected $guarded = [];
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

}