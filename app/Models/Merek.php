<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_merek'];
    protected $visible = ['id', 'nama_merek'];

    public function barang(){
        return $this->hasMany(Barang::class);
    }
}
