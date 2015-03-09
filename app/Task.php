<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {
    protected $guarded = [];
    public function catagory()
    {
        return $this->belongsTo('App\Catagory');
    }

}