<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class data_1461900281 implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $dataBuku = DB::table("rak_buku")
        ->join ("buku", "rak_buku.id_buku", "=", "buku.id")
        ->join ("jenis_buku", "rak_buku.id_jenis_buku", "=", "jenis_buku.id")
        ->select("rak_buku.id as no", "buku.judul as judulBuku", "buku.tahun_terbit as tahunTerbit", "jenis_buku.jenis as jenisBuku")
        ->get();

        return $dataBuku;   
    }
}