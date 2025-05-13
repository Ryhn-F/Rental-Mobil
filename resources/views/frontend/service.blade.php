@extends('layouts.userFront')
@section('content')


<div class="container py-5">
  <div class="text-center mb-5">
    <h2 class="fw-bold">Layanan Kami</h2>
    <p class="text-muted">Kami menyediakan berbagai layanan rental mobil yang fleksibel dan terpercaya</p>
  </div>

  <div class="row g-4">
    <!-- Layanan 1 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm text-center p-4">
        <i class="bi bi-car-front-fill display-4 text-primary mb-3"></i>
        <h5 class="fw-bold">Sewa Harian</h5>
        <p class="text-muted">Layanan sewa mobil harian untuk keperluan pribadi, bisnis, atau liburan Anda.</p>
      </div>
    </div>

    <!-- Layanan 2 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm text-center p-4">
        <i class="bi bi-person-check-fill display-4 text-primary mb-3"></i>
        <h5 class="fw-bold">Dengan Sopir</h5>
        <p class="text-muted">Nikmati kenyamanan berkendara dengan sopir profesional dan berpengalaman.</p>
      </div>
    </div>

    <!-- Layanan 3 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm text-center p-4">
        <i class="bi bi-clock-history display-4 text-primary mb-3"></i>
        <h5 class="fw-bold">Rental 24 Jam</h5>
        <p class="text-muted">Tersedia layanan sewa kapan saja, siang atau malam, sesuai kebutuhan Anda.</p>
      </div>
    </div>

    <!-- Layanan 4 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm text-center p-4">
        <i class="bi bi-geo-alt-fill display-4 text-primary mb-3"></i>
        <h5 class="fw-bold">Antar-Jemput</h5>
        <p class="text-muted">Layanan antar dan jemput mobil ke lokasi Anda (rumah, bandara, atau kantor).</p>
      </div>
    </div>

    <!-- Layanan 5 (ubah yang ini) -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm text-center p-4">
        <i class="bi bi-box2-heart-fill display-4 text-primary mb-3"></i>
        <h5 class="fw-bold">Paket All-In</h5>
        <p class="text-muted">
        Nikmati paket lengkap sewa mobil dengan sopir, bensin, dan biaya tol termasuk. Cocok untuk perjalanan praktis dan tanpa repot.
        </p>
      </div>
    </div>


    <!-- Layanan 6 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm text-center p-4">
        <i class="bi bi-stars display-4 text-primary mb-3"></i>
        <h5 class="fw-bold">Event & Wedding Car</h5>
        <p class="text-muted">Mobil mewah dan eksklusif untuk acara pernikahan, tamu VIP, atau event khusus.</p>
      </div>
    </div>
  </div>
</div>
@endsection
