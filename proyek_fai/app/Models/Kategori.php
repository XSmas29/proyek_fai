<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = "kategori";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function products(){
        return $this->hasMany(Barang::class, "fk_kategori", "id")->inRandomOrder()->limit(6);
    }
}
