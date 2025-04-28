@extends('layouts.admin')


@section('content')


<div class="card">
    <div class="card-header">
     Form Tambah Mobil
    </div>
    <div class="card-body">
        <form action="{{route('mobil.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_mobil">Nama Mobil</label>
                <input type="text" name="nama_mobil" class="form-control" value="{{old('nama_mobil')}} " >
            </div>
            <div class="form-group">
                <label for="harga_sewa">Harga Sewa </label>
                <input type="number" name="harga_sewa" class="form-control" placeholder="Rp.-" value="{{old('harga_sewa')}}" >
            </div>
            <div class="form-group">
                <label for="bahan_bakar">Jenis BBM</label>
                <select class="form-select" name="bahan_bakar" >
                    <option selected> - </option>
                    <option value="Bensin">Bensin</option>
                    <option value="Solar">Solar</option>

                  </select>
            </div>
            <div class="form-group">
                <label for="jumlah_kursi">Jumlah Kursi </label>
                <input type="number" name="jumlah_kursi" class="form-control" value="{{old('jumlah_kursi')}}">
            </div>

            <div class="form-group">
                <label for="transmisi">Transmisi</label>
                <select class="form-select" name="transmisi" >
                    <option selected> - </option>
                    <option value="Manual">Manual</option>
                    <option value="Matic">Matic</option>

                  </select>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-select" name="status" >
                    <option selected> - </option>
                    <option value="Tersedia">Available</option>
                    <option value="Tidak tersedia">Booked</option>
                    <option value="Dalam perbaikan">Under Maintenance</option>

                  </select>
            </div>



            <div class="form-group">
                <label for="p3k">P3k</label>
                <select class="form-select" name="p3k" >
                    <option selected> - </option>
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak tersedia</option>
                  </select>
            </div>

            <div class="form-group">
                <label for="audio">Audio</label>
                <select class="form-select" name="audio" >
                    <option selected> - </option>
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak tersedia</option>
                  </select>
            </div>

            <div class="form-group">
                <label for="charger">Charger</label>
                <select class="form-select" name="charger" >
                    <option selected> - </option>
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak tersedia</option>
                  </select>
            </div>

            <div class="form-group">
                <label for="ac">Air Conditioner</label>
                <select class="form-select" name="ac" >
                    <option selected> - </option>
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak tersedia</option>
                  </select>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>

            <div class="form-group">
                <label for="deskripsi">Description</label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
</div>
@endsection
