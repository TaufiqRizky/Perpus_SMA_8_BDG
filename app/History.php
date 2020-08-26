<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    public $timestamps = true;
    public $table = "histories";
    protected $fillable = ['id','aktivitas','user_id','id_buku'];

    protected $dates = [
        'created_at',
        'updated_at']; 
}
