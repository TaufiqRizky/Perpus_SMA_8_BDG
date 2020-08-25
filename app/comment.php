<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
	public $timestamps = true;
    public $table = "comments";
    protected $fillable = ['id','comment','user_id','id_buku'];

    protected $dates = [
        'created_at',
        'updated_at'];
}
