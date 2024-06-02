<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'order';
    protected $fillable = [
        'id_order',
        'tipe_order',
        'nama_pelanggan',
        'jlh_orang',
        'id_meja',
        'waktu_order',
        'no_hp',
        'kedatangan',
    ];
    protected $primaryKey = 'id_order';
    public function detailorder()
    {
        return $this->hasMany(OrderDetail::class, 'id_order', 'id_order');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
    

}
