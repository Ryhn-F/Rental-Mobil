@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-item-center">
        <h3>Daftar Mobil</h3>
        <a href="{{route('mobil.create')}}" class="btn btn-primary">+</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mobil</th>
                        <th>Gambar Mobil</th>
                        <th>Harga Mobil</th>
                        <th>Status Mobil</th >
                            <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cars as $car )
                    <tr>
                        <td > {{$loop->iteration}}</td>
                        <td> {{$car->nama_mobil}}</td>
                        <td>
                            <img src="{{ asset('storage/'.$car->gambar) }}" width="150" alt="Gambar Mobil" class="d-block mx-auto">
                        </td>
                        <td>Rp. {{$car->harga_sewa}}</td>
                        <td>{{$car->status}}</td>
                        <td >
                            <div class="d-flex flex-column align-items-center justify-content-between gap-2 d-block my-auto">
                                <a href="{{route('mobil.edit',$car->id)}}" class="btn btn-lg btn-warning"><i class="bi bi-pencil-square"></i></a>
                                <form onclick="return confirm('anda yakin ingin menghapus data ini ? ');" action="{{route('mobil.destroy', $car->id)}}" class="d-inline" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-lg btn-danger"><i class="bi bi-trash3"></i></button>
                                </form>

                            </div>

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Data Kosong </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
