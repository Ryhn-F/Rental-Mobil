@extends('layouts.userFront')

@section('content')

<div class="d-flex flex-column align-items-center mt-5 justify-content-center">
    <div class="col-md-6 text-center ">
        <h1 class="fw-bold" style="font-size: 70px">The Best Platform<br>for <span class="text-primary">Car Rental</span></h1>
        <p class="text-muted mt-3 mb-4 ">
            We open the door for you to explore the world in comfort and style. <br> Being your trusted travel partner.
        </p>

        <form class="row g-2 bg-white p-3 rounded shadow-sm">
            <div class="col-md-4">
                <label class="form-label fw-semibold">Where</label>
                <input type="text" class="form-control" placeholder="City or Destination">
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Pickup</label>
                <input type="date" class="form-control">
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Drop Off</label>
                <input type="date" class="form-control">
            </div>
        </form>
    </div>

    <div class="col-md-6 text-center mt-4 mt-md-0">
        <img src="{{ asset('assets/Car.png') }}" alt="Hero Car" class="img-fluid">
    </div>
</div>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">

        @if (session()-> has('message'))
        <div class="alert alert-{{session()->get('alert-type')}} alert-dismissible"  role="alert">
            {{session()->get('message')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>

        @endif
        <h2 class="fw-bold mb-4">Our Popular Car</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          @foreach ($mobil as $mobil)
          <div class="col">
            <div class="card h-100 shadow-lg rounded-4 border-0 position-relative custom-card">

              <!-- Status Badge -->
              <div class="position-absolute top-0 end-0 m-3">
                <span class="badge {{ $mobil->status == 'Tersedia' ? 'bg-success' : 'bg-warning' }} text-white">
                  {{ $mobil->status }}
                </span>
              </div>

              <!-- Mobil Image -->
              <img src="{{ Storage::url($mobil->gambar) }}" class="card-img-top p-3" alt="{{ $mobil->nama_mobil }}" style="height: 180px; object-fit: contain;">

              <!-- Card Body -->
              <div class="card-body text-center">
                <h5 class="card-title fw-bold">{{ $mobil->nama_mobil }}</h5>
                <p class="text-muted mb-1">{{ $mobil->jenis ?? 'Tipe Tidak Diketahui' }}</p>

                <!-- Fitur -->
                <div class="d-flex justify-content-around text-muted mb-3">
                  <div><i class="bi bi-fuel-pump"></i> {{ $mobil->bahan_bakar }}</div>
                  <div><i class="bi bi-gear-fill"></i> {{ $mobil->transmisi }}</div>
                  <div><i class="bi bi-person-fill"></i> {{ $mobil->jumlah_kursi }} Orang</div>
                </div>

                <div class="d-flex flex-row justify-content-between align-items-start">
  <!-- Harga -->
  <div class="fw-bold fs-5 text-primary mb-3">
    Rp. {{ number_format($mobil->harga_sewa) }} <span class="fs-6 text-muted">/ day</span>
  </div>

  <!-- Tombol -->
  <div class="d-flex justify-content-center gap-1 ">
    <a href="{{ route('detail', $mobil->slug) }}" class="btn btn-primary text-white bg-primary rounded-pill px-4">Detail</a>
  </div>
</div>
                </div>


            </div>
          </div>
          @endforeach
        </div>
      </div>


  </section>

@endsection
