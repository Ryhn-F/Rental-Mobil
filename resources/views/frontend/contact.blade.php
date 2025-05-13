@extends('layouts.userFront')
@section('content')


<div class="container py-5">
  <div class="row">
    <!-- Info Kontak -->
    <div class="col-md-6 mb-4">
      <h2 class="fw-bold mb-3">Hubungi Kami</h2>
      <p>Silakan hubungi kami untuk pemesanan, pertanyaan, atau informasi lebih lanjut tentang layanan Drivezy.</p>
      <ul class="list-unstyled">
        <li class="mb-3">
          <i class="bi bi-geo-alt-fill me-2 text-primary"></i>
          Jl. Daan Mogot KM.11 RT.01/RW.04, RT.1/RW.4, Kedaung Kali Angke, <br>
          Kecamatan Cengkareng, Kota Jakarta Barat, <br>
          Daerah Khusus Ibukota Jakarta 11710
        </li>
        <li class="mb-3">
          <i class="bi bi-person-fill me-2 text-primary"></i>
          +62 813-8266-1196 (Mizuno) 
        </li>
        <li class="mb-3">
          <i class="bi bi-person-fill me-2 text-primary"></i>
          +62 878-6107-6088 (Reihan)
        </li>
        <li class="mb-3">
          <i class="bi bi-person-fill me-2 text-primary"></i>
          +62 815-9588-873 (Hisham)
        </li>
        <li class="mb-3">
          <i class="bi bi-person-fill me-2 text-primary"></i>
          +62 857-1824-7039 (Marcell)
        </li>
        <br>
        <li class="mb-3">
          <i class="bi bi-envelope-fill me-2 text-primary"></i>
          rentals@drivezy.id
        </li>
        <li class="mb-3">
          <i class="bi bi-globe me-2 text-primary"></i>
          www.drivezy.id
        </li>
      </ul>
    </div>

    <!-- Form Kontak -->
    <div class="col-md-6">
      <h2 class="fw-bold mb-3">Kirim Pesan</h2>
      <form action="#" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Pesan</label>
          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>
    </div>
  </div>

   <!-- Google Maps -->
   <div class="mt-5">
    <h2 class="fw-bold mb-3">Lokasi Kami</h2>
    <div class="ratio ratio-16x9 rounded shadow">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9993732802996!2d106.73537131476902!3d-6.132584895560776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a0204a12c5369%3A0x38d7c3b460a50c60!2sJl.%20Daan%20Mogot%20Km.11%2C%20RT.1%2FRW.4%2C%20Kedaung%20Kali%20Angke%2C%20Kec.%20Cengkareng%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011710!5e0!3m2!1sen!2sid!4v1715158254783!5m2!1sen!2sid" 
        width="600" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</div>
@endsection
