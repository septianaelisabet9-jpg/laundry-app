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
    
    public function tampilKaryawanJoin()
    {
        return DB::table('karyawan')
            ->leftJoin('users', 'karyawan.id_user', '=', 'users.id')
            ->select('karyawan.*', 'users.name as username', 'users.email')
            ->orderBy('karyawan.id_karyawan', 'DESC') // <-- INI AGAR DATA TERBARU MUNCUL DI PALING ATAS
            ->get();
    }

    public function tampilTransaksi()
    {
        return DB::table('transaksi')
            ->join('pelanggan', 'transaksi.id_pelanggan', '=', 'pelanggan.id')
            ->join('detail_transaksi', 'transaksi.id', '=', 'detail_transaksi.id_transaksi')
            ->join('layanan', 'detail_transaksi.id_layanan', '=', 'layanan.id')
            ->select(
                'transaksi.*',
                'pelanggan.nama_pelanggan',
                'pelanggan.no_tlpn',
                'layanan.nama_layanan',
                'layanan.harga',
                'detail_transaksi.jumlah as berat'
            )
            ->get();
    }

    public function laporanPendapatan($tgl_mulai, $tgl_selesai)
    {
        $query = DB::table('transaksi')
            ->leftJoin('pelanggan', 'transaksi.id_pelanggan', '=', 'pelanggan.id')
            ->leftJoin('detail_transaksi', 'transaksi.id', '=', 'detail_transaksi.id_transaksi')
            ->leftJoin('layanan', 'detail_transaksi.id_layanan', '=', 'layanan.id')
            ->select(
                'transaksi.*',
                'pelanggan.nama_pelanggan',
                'layanan.harga as jmlh_bayar',
                'transaksi.created_at as tgl_bayar'
            );

        if ($tgl_mulai && $tgl_selesai) {
            $query->whereBetween('transaksi.created_at', [$tgl_mulai, $tgl_selesai]);
        }

        return $query->get();
    }
}