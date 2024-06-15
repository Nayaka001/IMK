<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'meja';
    protected $casts = [
        'id_meja' => 'string',
    ];
    
    protected $fillable = [
        'id_meja',
        'status',
        'keterangan',
    ];
    
    protected $primaryKey = 'id_meja';
    public function order()
    {
        return $this->hasOne(Order::class, 'id_meja', 'id_meja');
    }
}
