<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    public $table = "guru";
    protected $fillable = ['nip','nama','alamat','tgl_lahir','user_id','jk'];
}
