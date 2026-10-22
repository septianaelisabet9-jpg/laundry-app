<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Database extends Model
{
    protected $guarded = ['id'];

    public function pull($tabel, $kondisi)
    {
        return DB::table($tabel)->where($kondisi)->first();
    }

    public function tampil($tabel)
    {
        return DB::table($tabel)->get();
    }


    public function tambah($tabel, $data)
    {
        return DB::table($tabel)->insert($data);
    }
    
    public function tarik($tabel, $kondisi)
    {
        return DB::table($tabel)->where($kondisi)->first();
    }
}