<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faktur extends Model
{
    use HasFactory;
    protected $table = 'faktur';
    protected $fillable = [
        'id_order',
        'total_uang',
        'kembaian'
    ];
    public $timestamps = false;
    public $incrementing = false;
}
