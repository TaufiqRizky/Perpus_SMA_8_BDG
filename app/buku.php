<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    //
    public $timestamps = true;
    public $table = "buku";
    protected $fillable = ['judul','cover','pdf','jenis','genre','sinopsis','rekomen','user_id'];
}
