<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = "pelanggan"; // TABEL YANG TERKAIT DENGAN MODEL
    protected $guarded = ['id']; // MENGATUR HANYA COLUMN ID YANG TIDAK BOLEH DI ISI

     /*-------RELASI ANTAR TABLE--------- */
    // RELASI DARI MODEL PELANGGAN KE PENJUALAN 
    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }
}