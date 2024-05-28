<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'kategori-menu'; 
    protected $fillable = [
        'kategori',
        'jenis'
    ];
    
    protected $primaryKey = 'id_ktgmenu';
    public function menu()
    {
        return $this->hasMany(Menu::class, 'id_ktgmenu', 'id_ktgmenu');
    }
}
