@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-item-center">
        <h3>Daftar Booking</h3>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Mobil</th>
                        <th>Tanggal Book</th>
                        <th>Jenis Sewa</th >
                            <th>Harga Total</th >
                            <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user )
                    <tr>
                        <td > {{$loop->iteration}}</td>
                        <td> {{$user->nama}}</td>
                        <td>
                            {{ $user->mobil->nama_mobil }}
                        </td>
                        <td>{{$user->tgl_sewa}} </td>
                        <td>{{$user->jenis_sewa}}</td>
                        <td>{{$user->harga_total}}</td>
                        <td >
                            <div class="d-flex flex-column align-items-center justify-content-between gap-2 d-block my-auto">
                                <a href="{{route('mobil.edit',$user->id)}}" class="btn btn-lg btn-success"><i class="bi bi-check2"></i></a>
                                <form onclick="return confirm('anda yakin ingin menghapus data ini ? ');" action="{{route('mobil.destroy', $user->id)}}" class="d-inline" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-lg btn-danger"><i class="bi bi-x"></i></button>
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
