<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KaryawanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('karyawan')
            ->leftJoin('users', 'karyawan.id_user', '=', 'users.id')
            ->select('karyawan.id_karyawan', 'karyawan.nama_kry', 'users.name as username', 'users.email', 'karyawan.alamat_kry', 'karyawan.jk_kry')
            ->get();
    }

    public function headings(): array
    {
        return ["ID Karyawan", "Nama Karyawan", "Username Akun", "Email", "Alamat", "Jenis Kelamin"];
    }
}