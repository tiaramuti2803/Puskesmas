<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    public static function getAll(){
        return [
            [
             
                'nama'=> 'Ica',
                'jk'=>'P',
                'tgl_lahir'=> '18/05/2003',
                'alamat'=> 'Jakarta',
                'telp'=> '0858890518897'
        ],
        [
             
                'nama'=> 'Ruby',
                'jk'=>'L',
                'tgl_lahir'=> '14/02/2001',
                'alamat'=> 'Bogor',
                'telp'=> '085889051897'
    ],

    [
             
                'nama'=> 'Bintang',
                'jk'=>'P',
                'tgl_lahir'=> '12/03/2003',
                'alamat'=> 'Depok',
                'telp'=> '085889051897'

    ],

];
    }
}