<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_barang', 'harga', 'stok', 'id_merek'];
    protected $visible = ['id', 'nama_barang', 'harga', 'stok', 'id_merek'];

    public function merek(){
        return $this->BelongsTo(Merek::class, 'id_merek');
    }
}
