<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
    use HasFactory;
    protected $table = 'deposito';
    protected $guarded = ['id'];
    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class, 'nasabah_id');
    }
}
