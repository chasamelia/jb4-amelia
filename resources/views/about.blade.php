@extends('layouts.app')

@section('title', 'About - MyApp')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-white text-gray-800">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Tentang Saya</h1>
        <section class="mb-12">
            <h2 class="text-2xl font-semibold mb-4">Visi &amp; Misi</h2>
            <div class="flex flex-col md:flex-row md:justify-between">
                <div class="md:w-1/2">
                    <h3 class="text-xl font-semibold mb-2">Visi</h3>
                    <p class="mb-4">Menjadi individu yang cerdas, kreatif, dan berdampak positif bagi masyarakat melalui pendidikan, pengembangan diri, dan kontribusi dalam berbagai bidang yang saya minati, baik itu akademik maupun sosial.</p>
                    <h3 class="text-xl font-semibold mb-2">Misi</h3>
                    <ul class="list-disc list-inside">
                        <li>Membantu Masyarakat </li>
                        <li>Mengembangkan Keterampilan</li>
                        <li>Memberikan dampak positif</li>
                    </ul>
                </div>
                <div class="md:w-1/2 flex justify-center items-center mt-4 md:mt-0">
                    <img src="giselleaespa.jpg" alt="Visi dan Misi" class="rounded" width="150" height="150">
                </div>
            </div>
        </section>
        <section class="mb-12">
            <h2 class="text-2xl font-semibold mb-4">Perjalanan Saya</h2>
            <p>Sejak kecil, saya selalu percaya bahwa pendidikan adalah kunci untuk membuka banyak peluang, dan saya berusaha semaksimal mungkin untuk terus belajar dan berkembang. Saya juga membantu saya dalam mengembangkan kemampuan sosial dan kepemimpinan. Ke depan, saya ingin terus berkembang dan mempersiapkan diri untuk menghadapi tantangan masa depan dengan lebih baik, baik dalam dunia pendidikan maupun kehidupan secara umum.</p>
        </section>
        
            </div>
        </section>
        <section>
        <center><h2 class="text-2xl font-semibold mb-4">Hubungi Kami</h2></center>
        </section>
            <p class="text-center">
                <p><center>
                Jika Anda memiliki pertanyaan, saran, atau ingin berbicara lebih lanjut, jangan ragu untuk menghubungi saya!</p></center>
                <ul style="list-style-type: none"><center>
                <li> Email: <a href="ameliachasanah320@gmail.com">ameliachasanah320@gmail</a></li>
                <li> No telp: <a href="0857425514">0857425514</a></li>
                <li> Alamat: Demak, Jawa Tengah, Indonesia</li>
            </ul></center>
    </div>
</body>
</html>
@endsection