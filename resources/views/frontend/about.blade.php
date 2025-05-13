@extends('layouts.userFront')
@section('content')

<div class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-6 mb-4">
      <img src="https://static.wixstatic.com/media/403b0a_f7af0107a5234d98b1c5505b7b73dca6~mv2.png/v1/fill/w_504,h_302,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/403b0a_f7af0107a5234d98b1c5505b7b73dca6~mv2.png" alt="Tentang Drivezy" class="img-fluid rounded">
    </div>
    <div class="col-md-6">
      <h2 class="fw-bold mb-3">Tentang Drivezy</h2>
      <p>
        Drivezy adalah layanan rental mobil terpercaya yang berbasis di Indonesia, melayani berbagai kebutuhan transportasi harian, perjalanan bisnis, hingga event khusus.
      </p>
      <p>
        Dengan armada kendaraan yang selalu terawat, layanan pelanggan 24 jam, dan proses pemesanan yang mudah, kami berkomitmen untuk memberikan pengalaman berkendara yang nyaman dan aman bagi setiap pelanggan.
      </p>
      <ul class="list-unstyled mt-4">
        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Armada Terbaru & Terawat</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Layanan 24 Jam</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Booking Mudah & Cepat</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Harga layanan yang ramah terjangkau </li>
      </ul>
    </div>

    <div class="container py-5">

  <!-- Bagian Tim Pengembang -->
  <div class="row mt-5">
    <div class="col-12 text-center mb-4">
      <h3 class="fw-bold">Tim Pengembang</h3>
      <p class="text-muted">Kenali tim di balik proyek ini</p>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body text-center">
          <img src="{{ asset('assets/cel.jpg') }}" class="rounded-circle mb-3" width="100" height="100" alt="Foto Marcell">
          <h5 class="card-title">Aditya Sebastian Marcellino</h5>
          <p class="card-text text-muted">Full-Stack Developer</p>
          <a href="https://marcellportofolio.netlify.app" target="_blank" class="btn btn-outline-primary btn-sm">Visit Us</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body text-center">
          <img src="{{ asset('assets/rei.jpg') }}" class="rounded-circle mb-3" width="100" height="100" alt="Foto Raihan">
          <h5 class="card-title">Muhammad Rayhan Firdaus</h5>
          <p class="card-text text-muted">Full-Stack Developer</p>
          <a href="http://raysportfolio.netlify.app" target="_blank" class="btn btn-outline-primary btn-sm">Visit Us</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body text-center">
          <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=random" class="rounded-circle mb-3" width="100" height="100" alt="Foto Hisham">
          <h5 class="card-title">Ahmad Hisham Yusra</h5>
          <p class="card-text text-muted">Full-Stack Developer</p>
          <a href="https://www.behance.net/janesmith" target="_blank" class="btn btn-outline-primary btn-sm">Visit Us</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4 mx-auto">
      <div class="card h-100 shadow-sm">
        <div class="card-body text-center">
            <img src="{{ asset('assets/zuno.jpg') }}" class="rounded-circle mb-3" width="100" height="100" alt="Foto Mizuno">
                <h5 class="card-title">Razendrya Mizuno Katili</h5>
                <p class="card-text text-muted">System Analyst</p>
                <a href="https://drive.google.com/drive/u/0/folders/1Bx3t74Yf_U1hQvKnY5VnfJxmG816Imet" target="_blank" class="btn btn-outline-primary btn-sm">Visit Us</a>
        </div>
      </div>
    </div>

  </div>
</div>




  </div>
</div>
@endsection
