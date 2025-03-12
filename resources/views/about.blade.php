@extends('layouts.app')

@section('title', 'Home - MyApp')

@section('content')
   <div class="card">
        <div class="card-header">
        <h3><center>Tentang Saya</center></h3>
        </div>

        <div class="card-body">
            <h5 class="text-center">Perjalanan Saya</h5>

            <p>Perjalanan saya di usia 16 tahun ini sudah banyak memberi pengalaman dan pelajaran yang berharga. Meskipun masih terbilang muda, saya merasa setiap langkah yang saya ambil sudah membawa saya ke banyak tempat yang luar biasa.
            Sejak kecil, saya selalu penasaran dengan hal-hal baru, baik itu hobi, tempat, atau orang-orang yang saya temui. Semua itu membuat saya terus belajar untuk menjadi pribadi yang lebih baik.</p>
            <p>Tentu saja, perjalanan saya nggak selalu mulus. Di usia saya yang masih muda, banyak tantangan yang datang, baik itu masalah di sekolah, hubungan dengan teman-teman, atau kadang rasa bingung soal masa depan.
            Tapi saya percaya bahwa setiap masalah punya solusinya, dan setiap kegagalan itu cuma bagian dari perjalanan untuk menjadi lebih kuat dan lebih bijak.</p>
            <p>Perjalanan saya masih panjang dan saya excited banget dengan apa yang akan datang. Walaupun belum tahu semua yang ada di depan, saya siap menghadapi semuanya dengan semangat dan tekad yang kuat.
            Saya percaya, semakin banyak saya mencoba dan belajar, semakin banyak hal indah yang bisa saya capai di masa depan.</p>
        </div>
        <div class="mb-5">
            <h5 class="text-center">Hubungi Saya</h5>
            <p class="text-center">
            Jika Anda memiliki pertanyaan, saran, atau ingin berbicara lebih lanjut, jangan ragu untuk menghubungi saya! 
            </p>
            <div class="text-center">
            <a href="{{ route('contact')}}" class="btn btn-primary btn-lg">Hubungi Kami</a>
            </div>
        </div>
    </div>
@endsection