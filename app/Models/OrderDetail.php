<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'order-detail';
    protected $fillable = [
        'id_order_details',
        'id_order',
        'id_menu',
        'note',
        'jumlah',
        'subtotal',
        'progress',
    ];
    protected $primaryKey = 'id_order_details';
}
