@extends('layouts.userFront')

@section('content')

<div class="container-fluid bg-dark">
    <div class="d-flex flex-row justify-content-center align-items-center">
        <div class="text-center p-3">
            <h2 class="fs-2 text-white fw-bolder">Form Booking</h2>
        </div>
    </div>
</div>

<div class="container-lg p-5 col-lg-8" style="height: auto">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container-sm border border-1 p-5 col-lg-8 my-auto shadow-md" style="border-radius:30px">
        <form action="{{ route('sewa.store') }}" class="row-gap-3" method="post">
            @csrf

            <input type="hidden" name="mobil_id" value="{{ $mobil->id }}">
            <input type="hidden" id="final_fee" name="final_fee" value="{{ $mobil->harga_sewa }}">

            <div class="form-group mt-1">
                <label for="nama" class="fw-bold">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control mt-3">
            </div>
            <div class="form-group mt-1">
                <label for="no_telp" class="fw-bold">No. Telp</label>
                <input type="text" name="no_telp" class="form-control mt-3">
            </div>
            <div class="form-group mt-2">
                <label for="alamat" class="fw-bold">Alamat</label>
                <input type="text" name="alamat" class="form-control mt-3">
            </div>
            <div class="form-group mt-2">
                <label for="tgl_sewa" class="fw-bold">Hari Sewa</label>
                <input type="date" name="tgl_sewa" class="form-control mt-3" id="tgl_sewa">
            </div>
            <div class="form-group mt-2">
                <label for="hari_sewa" class="fw-bold">Hari Kembali</label>
                <input type="date" name="hari_sewa" class="form-control mt-3" id="hari_sewa">
            </div>
            <div class="form-group mt-2">
                <label for="jenis_sewa" class="fw-bold">Jenis sewa</label>
                <select class="form-select mt-3" name="jenis_sewa" id="jenis_sewa">
                    <option selected value="Normal">Normal</option>
                    <option value="Lepas Kunci">Lepas Kunci (+ Rp.100.000,-)</option>
                    <option value="Lepas Kunci + Sopir">Lepas Kunci + Sopir (+ Rp.190.000,-)</option>
                    <option value="Sopir">+ Sopir (+ Rp.90.000,-)</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="pesan" class="fw-bold">Pesan tambahan</label>
                <textarea name="pesan" id="pesan" cols="30" rows="5" class="form-control mt-2"></textarea>
            </div>

            <div class="border border-secondary-subtle mt-3"></div>
            <div class="border border-secondary-subtle mt-1"></div>

            <div class="mt-2">
                <p class="fw-bolder fs-4">Fee:</p>
                <h1 class="fw-bold text-success fs-2" id="harga_sewa_display"
                    data-base-price="{{ $mobil->harga_sewa }}">
                    Rp.{{ number_format($mobil->harga_sewa, 0, ',', '.') }},-
                </h1>
                <p id="fee_note" class="text-muted small">* Harga dikalikan jumlah hari</p>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary mt-4 fw-bold fs-4">Book</button>
            </div>
        </form>
    </div>
</div>

{{-- JavaScript to calculate fee --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const hargaDisplay = document.getElementById('harga_sewa_display');
        const basePrice = parseInt(hargaDisplay.dataset.basePrice);

        const jenisSewa = document.getElementById('jenis_sewa');
        const tglSewa = document.getElementById('tgl_sewa');
        const hariSewa = document.getElementById('hari_sewa');
        const finalFeeInput = document.getElementById('final_fee');

        function calculateAndUpdatePrice() {
            const tanggalMulai = new Date(tglSewa.value);
            const tanggalKembali = new Date(hariSewa.value);

            if (!tglSewa.value || !hariSewa.value || tanggalKembali <= tanggalMulai) {
                hargaDisplay.textContent = 'Rp.0,-';
                finalFeeInput.value = 0;
                return;
            }

            // Hitung jumlah hari
            const diffTime = Math.abs(tanggalKembali - tanggalMulai);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

            let tambahan = 0;
            if (jenisSewa.value === 'Lepas Kunci') {
                tambahan = 100000;
            } else if (jenisSewa.value === 'Sopir') {
                tambahan = 90000 * diffDays;
            }
            else if (jenisSewa.value === 'Lepas Kunci + Sopir'){
                tambahan = 100000 + (90000 * diffDays);
            }

            const total = basePrice * diffDays;
            const totalAkhir = total + tambahan;

            hargaDisplay.textContent = 'Rp.' + totalAkhir.toLocaleString('id-ID') + ',-';
            finalFeeInput.value = totalAkhir;
        }

        jenisSewa.addEventListener('change', calculateAndUpdatePrice);
        tglSewa.addEventListener('change', calculateAndUpdatePrice);
        hariSewa.addEventListener('change', calculateAndUpdatePrice);
    });
</script>

@endsection
