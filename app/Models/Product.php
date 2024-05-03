<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['kode', 'nama', 'harga', 'deskripsi', 'image_url', 'satuan_id'];

    public function satuan()
    {
        return $this->belongsTo(Unit::class, 'satuan_id');
    }
}
