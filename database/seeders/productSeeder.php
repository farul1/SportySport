<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'kode' => 'PS001',
            'nama' => 'Sepatu Lari Nike Air Zoom Pegasus 37',
            'harga' => 1500000,
            'deskripsi' => 'Sepatu lari dengan teknologi terbaru untuk kenyamanan maksimal.',
            'image_url' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2020/10/19/b682eb08-0dcc-4435-ba64-ce1981db8643.jpg',
            'satuan_id' => 1,
        ]);

        Product::create([
            'kode' => 'PS002',
            'nama' => 'Baju Olahraga Adidas Primeblue',
            'harga' => 500000,
            'deskripsi' => 'Baju olahraga ringan dengan bahan ramah lingkungan.',
            'image_url' => 'https://v2.ncrsport.com/img/storage/large/GD8677-1.jpg',
            'satuan_id' => 2,
        ]);

        Product::create([
            'kode' => 'PS003',
            'nama' => 'Bola Sepak Adidas Finale',
            'harga' => 250000,
            'deskripsi' => 'Bola sepak resmi untuk pertandingan tingkat profesional.',
            'image_url' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//102/MTA-13925757/adidas_adidas_finale_21_20th_anniversary_ucl_club_football_ball_bola_sepak_-gk3470-_full02_t520jv5b.jpg',
            'satuan_id' => 3,
        ]);

        Product::create([
            'kode' => 'PS004',
            'nama' => 'Raket Badminton Yonex Voltric Z Force II',
            'harga' => 1200000,
            'deskripsi' => 'Raket badminton dengan kombinasi kekuatan dan kontrol.',
            'image_url' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/online-store_yonex-voltric-z-force-ii-raket-badminton_full01.jpg',
            'satuan_id' => 4,
        ]);

        Product::create([
            'kode' => 'PS005',
            'nama' => 'Celana Pendek Nike Dri-FIT Academy',
            'harga' => 350000,
            'deskripsi' => 'Celana pendek dengan teknologi keringat cepat untuk kenyamanan maksimal.',
            'image_url' => 'https://www.planetsports.asia/media/catalog/product/cache/932b880b51303ef8bdfacfab1d810ff5/0/1/01-NIKE-AOAHONIK5-NIKCW6108437-Blue.jpg',
            'satuan_id' => 5,
        ]);

        Product::create([
            'kode' => 'PS006',
            'nama' => 'Bola Basket Spalding NBA Official Game Ball',
            'harga' => 1000000,
            'deskripsi' => 'Bola basket resmi yang digunakan dalam pertandingan NBA.',
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlqq04CoP84Yj-PEk6235PeeI2w-zSrZ45-skTjejfgg&s',
            'satuan_id' => 3,
        ]);

        Product::create([
            'kode' => 'PS007',
            'nama' => 'Sepatu Futsal Adidas Predator Freak.1',
            'harga' => 800000,
            'deskripsi' => 'Sepatu futsal dengan teknologi kontrol bola yang unggul.',
            'image_url' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/MTA-30240479/adidas_adidas_predator_freak-3_indoor_football_shoes_sepatu_futsal_pria_-fy7820-_full02_ippq088z.jpeg',
            'satuan_id' => 1,
        ]);

        Product::create([
            'kode' => 'PS008',
            'nama' => 'Jersey Sepak Bola Puma AC Milan Home',
            'harga' => 600000,
            'deskripsi' => 'Jersey resmi AC Milan untuk musim ini.',
            'image_url' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2024/3/27/22cb709c-9036-4f67-8bc7-2b85344ca6ff.png',
            'satuan_id' => 2,
        ]);

        Product::create([
            'kode' => 'PS009',
            'nama' => 'Raket Tenis Wilson Pro Staff RF97 Autograph',
            'harga' => 2000000,
            'deskripsi' => 'Raket tenis yang dikembangkan bersama Roger Federer.',
            'image_url' => 'https://images.tokopedia.net/img/cache/700/hDjmkQ/2023/2/6/66129141-989f-4b7a-a0cd-4d9fd2215c80.jpg',
            'satuan_id' => 4,
        ]);

        Product::create([
            'kode' => 'PS010',
            'nama' => 'Topi Trucker Nike Sportswear Heritage86',
            'harga' => 150000,
            'deskripsi' => 'Topi trucker dengan tampilan klasik dan nyaman.',
            'image_url' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2021/6/25/07da7f71-1b9d-4aaa-8ee6-5062d145992c.jpg',
            'satuan_id' => 5,
        ]);
    }
}
