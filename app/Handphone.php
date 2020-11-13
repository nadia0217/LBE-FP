<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handphone extends Model
{
    protected $fillable = [
        'nama_barang', 'brand', 'stok', 'harga_beli', 'harga_jual', 'user_id',
    ];
}
