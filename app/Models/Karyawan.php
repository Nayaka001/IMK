<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class Karyawan extends Model
    {
        use HasFactory;
        public $timestamps = false;
        public $incrementing = false;

        protected $table = 'karyawan';
        protected $fillable = [
            'id_user',
            'nama',
            'tgl_lahir',
            'no_hp',
            'alamat',
            'gaji',
            'dokumen'
        ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
    
    protected $primaryKey = 'id_user';
}
