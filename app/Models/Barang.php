<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = ('barangs');
    protected $fillable = ['kode_barang', 'nama_barang', 'jenis_varian', 'qty', 'harga_jual'];
}

