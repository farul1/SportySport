<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportyStore</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .blog-post {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            transition: box-shadow 0.3s ease;
            min-height: 400px;
        }
        .blog-post:hover {
            box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
        }
        .blog-title {
            color: #89c2ff;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }
        .blog-author {
            color: #6c757d;
            font-style: italic;
            margin-bottom: 10px;
        }
        .blog-content {
            color: #343a40;
            line-height: 1.6;
        }
        .btn-primary {
            background-color: #5569fc;
            border-color: #5569fc;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #32354b;
            border-color: #32354b;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="blog-post p-4">
                    <div class="text-center">
                        <img class="img-fluid mb-4 rounded" src="https://t4.ftcdn.net/jpg/00/04/43/79/360_F_4437963_Ys7eTLPVxSkChhP3TXz4YYjHwWSg14yQ.jpg" alt="Book Image">
                    </div>
                    <h2 class="blog-title">SportySport</h2>
                    <p class="blog-author">By Syafarul Priwantoro</p>
                    <p class="blog-content">SportySport adalah toko perlengkapan olahraga yang menyediakan berbagai macam produk berkualitas tinggi untuk memenuhi kebutuhan Anda dalam berbagai jenis olahraga. Dari pakaian dan sepatu olahraga hingga peralatan dan aksesori, kami memiliki segala yang Anda butuhkan untuk meningkatkan performa dan kenyamanan Anda saat berolahraga. Dengan harga yang kompetitif dan layanan pelanggan yang ramah, SportySport siap membantu Anda mencapai tujuan kebugaran dan gaya hidup sehat Anda. Temukan koleksi terbaru kami dan mulai berolahraga dengan gaya bersama SportySport!</p>
                    <a href="{{ route('home') }}" class="btn btn-primary btn-lg">Show</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
