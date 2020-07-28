<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    // protected $table = 'table_name';

    // primary key
    // protected $primaryKey = 'item_id';

    // timestamp
    // public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}