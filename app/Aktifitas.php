<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aktifitas extends Model
{
    //
    public $timestamps = true;
    public $table = "aktivitas";
    protected $fillable = ['judul','cover','pdf','jenis','genre','sinopsis','rekomen','user_id'];
    protected $dates = [
        'created_at',
        'updated_at'];
}
