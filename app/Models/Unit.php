<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = ['kode_satuan', 'nama_satuan'];

    public function products()
    {
        return $this->hasMany(Product::class, 'satuan_id');
    }
}
