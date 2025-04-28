@extends('layouts.admin')


@section('content')

<div class="row">
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
         Form Tambah Mobil
        </div>
        <div class="card-body">
            <form action="{{ route('mobil.update', $mobil->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT') {{-- Laravel requires this for updating resources --}}

                <div class="form-group">
                    <label for="nama_mobil">Nama Mobil</label>
                    <input type="text" name="nama_mobil" class="form-control" value="{{ old('nama_mobil', $mobil->nama_mobil) }}">
                </div>

                <div class="form-group">
                    <label for="harga_sewa">Harga Sewa</label>
                    <input type="number" name="harga_sewa" class="form-control" placeholder="Rp.-" value="{{ old('harga_sewa', $mobil->harga_sewa) }}">
                </div>

                <div class="form-group">
                    <label for="bahan_bakar">Jenis BBM</label>
                    <select class="form-select" name="bahan_bakar">
                        <option value="Bensin" {{ old('bahan_bakar', $mobil->bahan_bakar) == 'bensin' ? 'selected' : '' }}>Bensin</option>
                        <option value="Solar" {{ old('bahan_bakar', $mobil->bahan_bakar) == 'solar' ? 'selected' : '' }}>Solar</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="jumlah_kursi">Jumlah Kursi</label>
                    <input type="number" name="jumlah_kursi" class="form-control" value="{{ old('jumlah_kursi', $mobil->jumlah_kursi) }}">
                </div>

                <div class="form-group">
                    <label for="transmisi">Transmisi</label>
                    <select class="form-select" name="transmisi">
                        <option value="Manual" {{ old('transmisi', $mobil->transmisi) == 'manual' ? 'selected' : '' }}>Manual</option>
                        <option value="Automatic" {{ old('transmisi', $mobil->transmisi) == 'automatic' ? 'selected' : '' }}>Matic</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-select" name="status">
                        <option value="Tersedia" {{ old('status', $mobil->status) == 'Tersedia' ? 'selected' : '' }}>Available</option>
                        <option value="Tidak tersedia" {{ old('status', $mobil->status) == 'Tidak tersedia' ? 'selected' : '' }}>Booked</option>
                        <option value="Dalam perbaikan" {{ old('status', $mobil->status) == 'Dalam perbaikan' ? 'selected' : '' }}>Under Maintenance</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="p3k">P3K</label>
                    <select class="form-select" name="p3k">
                        <option value="1" {{ old('p3k', $mobil->p3k) == '1' ? 'selected' : '' }}>Tersedia</option>
                        <option value="0" {{ old('p3k', $mobil->p3k) == '0' ? 'selected' : '' }}>Tidak tersedia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="audio">Audio</label>
                    <select class="form-select" name="audio">
                        <option value="1" {{ old('audio', $mobil->audio) == '1' ? 'selected' : '' }}>Tersedia</option>
                        <option value="0" {{ old('audio', $mobil->audio) == '0' ? 'selected' : '' }}>Tidak tersedia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="charger">Charger</label>
                    <select class="form-select" name="charger">
                        <option value="1" {{ old('charger', $mobil->charger) == '1' ? 'selected' : '' }}>Tersedia</option>
                        <option value="0" {{ old('charger', $mobil->charger) == '0' ? 'selected' : '' }}>Tidak tersedia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="ac">Air Conditioner</label>
                    <select class="form-select" name="ac">
                        <option value="1" {{ old('ac', $mobil->ac) == '1' ? 'selected' : '' }}>Tersedia</option>
                        <option value="0" {{ old('ac', $mobil->ac) == '0' ? 'selected' : '' }}>Tidak tersedia</option>
                    </select>
                </div>



                <div class="form-group">
                    <label for="deskripsi">Description</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control">{{ old('deskripsi', $mobil->deskripsi) }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

        </div>
    </div>

</div>
<div class="col-lg-4">

    <div class="card">
        <div class="card-header">
         Form Tambah Mobil
        </div>
        <div class="card-body">
            <form action="{{ route('mobil.updateImage', $mobil->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                    <div class="form-group">

                        @if($mobil->gambar)
                        <img src="{{ asset('storage/' . $mobil->gambar) }}" alt="Gambar Mobil" class="img-fluid">
                    @endif
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                         <input type="file" class="form-control" name="gambar">
                    </div>




                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>
</div>
@endsection
