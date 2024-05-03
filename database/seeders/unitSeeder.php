<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class unitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit::create([
            'kode_satuan' => 'PAIR',
            'nama_satuan' => 'Pair',
        ]);

        Unit::create([
            'kode_satuan' => 'PIECE',
            'nama_satuan' => 'Piece',
        ]);

        Unit::create([
            'kode_satuan' => 'BALL',
            'nama_satuan' => 'Ball',
        ]);

        Unit::create([
            'kode_satuan' => 'SET',
            'nama_satuan' => 'Set',
        ]);

        Unit::create([
            'kode_satuan' => 'PIECE',
            'nama_satuan' => 'Piece',
        ]);
    }
}
