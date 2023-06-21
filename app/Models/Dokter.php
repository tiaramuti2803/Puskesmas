<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

public function pasien(){
    //karena dokter menitipkan id ke pasien,
    //maka dokter menghubungkan menggunakan has + kardinalitas
    //kardinalitas 1 to M dari model ini ke lain: hasMany
    // 1 to 1 ke model lain: hasOne
    return $this->hasMany(Pasien::class);

    }

}

