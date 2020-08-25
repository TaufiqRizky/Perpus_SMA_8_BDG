<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    public $timestamps = true;
    public $table = "ratings";
    protected $fillable = ['id','rate','user_id','id_buku'];

    protected $dates = [
        'created_at',
        'updated_at'];
}
