<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    protected $guarded = ['id'];
    public function detail()
    {
        return $this->hasMany(PenjualanDetail::class, 'penjualan_id');
    }
}
