@extends('layouts.userFront')

@section('content')
<div class="min-vh-100 d-flex flex-column">
    <div class="flex-grow-1">
        @auth
        <h2 class="mt-5">Daftar Booking, <span class="text-primary fw-bold display-6">{{ (Auth::user()->name) }}</span> .</h2>
        @else
        <h2 class="mt-5">Daftar Booking, <span class="text-primary fw-bold display-6">...</span> .</h2>
        @endauth
        <p class="fw-bold mb-4 pb-4" id="today-date"></p>

        @if($bookings->isEmpty())
            <p>Kamu belum melakukan booking apa pun.</p>
        @else
            @foreach($bookings as $booking)
                @if($booking->is_confirmed)
                    <div class="booking-row row rounded rounded-pill my-3 p-2 gx-2 gy-2 align-items-center">
                        <div class="col-auto text-center">
                            <i class="display-5 bi bi-dot text-primary"></i>
                        </div>

                        <div class="col-auto d-flex flex-column" style="min-width: 100px;">
                            <span class="small fw-bold">{{ \Carbon\Carbon::parse($booking->tgl_sewa)->translatedFormat('F j, D') }}</span>
                            <span class="small text-secondary">{{ \Carbon\Carbon::parse($booking->hari_sewa)->translatedFormat('F j, D') }}</span>
                        </div>

                        <div class="col-auto">
                            <div class="vr h-100 py-3"></div>
                        </div>

                        <div class="col-md-4 col-12 d-flex flex-column ps-4">
                            <div class="pb-2 fw-bold">{{ $booking->mobil->nama_mobil ?? 'Mobil tidak ditemukan' }}</div>
                            <ul class="list-unstyled d-flex flex-wrap gap-2 small">
                                <li>
                                    @if ($booking->mobil->p3k)
                                        <i class="ri-checkbox-circle-line text-success"></i>
                                        <span>P3K</span>
                                    @else
                                        <i class="ri-close-circle-line text-danger"></i>
                                        <span>P3K</span>
                                    @endif
                                </li>
                                <li>
                                    @if ($booking->mobil->charger)
                                        <i class="ri-checkbox-circle-line text-success"></i>
                                        <span>CHARGER</span>
                                    @else
                                        <i class="ri-close-circle-line text-danger"></i>
                                        <span>CHARGER</span>
                                    @endif
                                </li>
                                <li>
                                    @if ($booking->mobil->audio)
                                        <i class="ri-checkbox-circle-line text-success"></i>
                                        <span>AUDIO</span>
                                    @else
                                        <i class="ri-close-circle-line text-danger"></i>
                                        <span>AUDIO</span>
                                    @endif
                                </li>
                                <li>
                                    @if ($booking->mobil->ac)
                                        <i class="ri-checkbox-circle-line text-success"></i>
                                        <span>AC</span>
                                    @else
                                        <i class="ri-close-circle-line text-danger"></i>
                                        <span>AC</span>
                                    @endif
                                </li>
                                <li>
                                    @if($booking->jenis_sewa == 'Normal')
                                        <span class="fw-bold text-light bg-secondary px-3 py-1 rounded-pill small">{{ $booking->jenis_sewa }}</span>
                                    @elseif($booking->jenis_sewa == 'Lepas Kunci')
                                        <span class="fw-bold text-light bg-warning px-1 py-1 rounded-pill small">{{ $booking->jenis_sewa }}</span>
                                    @elseif($booking->jenis_sewa == 'Sopir')
                                        <span class="fw-bold text-light bg-success px-4 py-1 rounded-pill small">{{ $booking->jenis_sewa }}</span>
                                    @else
                                        <span class="fw-bold text-light bg-dark">{{ $booking->jenis_sewa }}</span>
                                    @endif
                                </li>
                            </ul>
                        </div>

                        <div class="col-auto my-auto">
                            <img src="{{ Storage::url($booking->mobil->gambar) }}" width="80" alt="Gambar Mobil" class="rounded-pill">
                        </div>

                        <div class="col-6 col-md-2 ps-2">
                            <div class="text-truncate" style="max-width: 100%;" title="{{ $booking->pesan }}">
                                <small><i class="text-secondary bi bi-person-circle h6"></i> <em>"{{ $booking->pesan }}"</em></small>
                            </div>
                            <div class="text-truncate" style="max-width: 100%;" title="{{ $booking->alamat }}">
                                <small><i class="bi bi-house-door-fill h6 text-primary"></i> <em>{{ $booking->alamat }}</em></small>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="d-flex flex-column">
                                <span class="small fw-bold">Price :</span>
                                <span class="text-secondary">Rp{{ number_format($booking->harga_total, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="booking-row row rounded rounded-pill my-3 p-2 gx-2 gy-2 align-items-center">
                        <h4 class="ms-4 text-primary fw-bold"><i class="bi bi-arrow-clockwise"></i> Booking on pending. . .</h4>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
</div>
@endsection
