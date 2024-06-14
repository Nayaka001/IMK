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
        'status',
        'id_ktgmenu',
        'gambar_menu',
        'keterangan',
    ];
    
    protected $primaryKey = 'id_menu';
    public function detailorder()
    {
        return $this->hasMany(OrderDetail::class, 'id_menu', 'id_menu');
    }
    public function ktgmenu()
    {
        return $this->belongsTo(Kategori::class, 'id_ktgmenu', 'id_ktgmenu');
    }
}
