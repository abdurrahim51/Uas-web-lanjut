<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_customer',
        'produk',
        'jumlah',
        'harga',
    ];


    public function produkk()
    {
        return $this->belongsTo(Product::class, 'produk', 'id');
    }
}
