<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Pasien extends Model
{
    use HasFactory;

    public static function getALL(){
        return[
        [   'nama'=>'Budi', 
            'jk'=>'l', 
            'tgl_lahir'=>'18/06/2003', 
            'alamat'=>'Depok', 
            'telp'=>'085889051897'],
        [
            'nama'=>'Elsa', 
            'jk'=>'p', 
            'tgl_lahir'=>'14/09/2002', 
            'alamat'=>'Jakarta', 
            'telp'=>'085889051897'],

        [   'nama'=>'Latif', 
            'jk'=>'l', 
            'tgl_lahir'=>'20/03/2002', 
            'alamat'=>'Bogor', 
            'telp'=>'085889051897'
        ],
    ];
    }
}
