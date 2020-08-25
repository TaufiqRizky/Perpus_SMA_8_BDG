<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ulasan extends Model
{
	public $timestamps = true;
    public $table = "ulasan";
    protected $fillable = ['id','subject','ulasan','user_id','id_buku'];

    protected $dates = [
        'created_at',
        'updated_at']; 

    //
}
