<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    public static function getAll(){
        return[
            [ 
                'nama'=>'Muti',
                'spesialis'=>'Perawatan Mata',  
                'telp'=>'085889051897',
                'alamat'=>'Depok'],
            
            
                ['nama'=>'Fairuz',
                'spesialis'=>'Ilmu Bedah',
                'telp'=>'085889051897',
                'alamat'=>'Jakarta'],
            
            
                ['nama'=>'Fai',
                'spesialis'=>'Gigi',                
                'telp'=>'085889051897',
                'alamat'=>'Bogor'
            ],
        ];
    }
}