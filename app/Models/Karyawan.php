<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $guarded = ['id'];
    public $timestamps = false;
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }
}
