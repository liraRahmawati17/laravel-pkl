<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $visible =['nama_barang', 'suplier_id', 'harga', 'stok'];
    protected $fillable =['nama_barang', 'suplier_id', 'harga', 'stok'];
    public $timestamps = true;


   public function suplier()
   {
        return $this->belongsTo(suplier::class,'suplier_id','id');
     // $this->belongsTo('App\Models\suplier', 'suplier_id');
   }

    }
