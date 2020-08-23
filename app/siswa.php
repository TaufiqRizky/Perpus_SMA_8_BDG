<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    public $timestamps = true;
    public $table = "siswa";
    protected $fillable = ['nis','nama','alamat','tgl_lahir','user_id','jk','kelas'];
    protected $dates = [
        'created_at',
        'updated_at'];
}
