<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'menu';
    protected $fillable = [
        'nama_menu',
        'harga',
        'id_ktgmenu',
        'gambar_menu',
        'keterangan',
    ];
    
    protected $primaryKey = 'id_menu'; // Nama kolom yang digunakan sebagai identifier
}