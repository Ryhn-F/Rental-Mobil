@extends('layouts.userFront')
@section('content')

<div class="container py-5">
  <h2 class="mb-4">Edit Profil</h2>
  <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data"> 
    @csrf
    @method('PUT')

    <div class="mb-3">  
      <label for="name" class="form-label">Nama</label>
      <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
    </div>
    

    <div class="mb-3">
      <label for="password" class="form-label">Password Baru (opsional)</label>
      <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak ingin mengubah">
    </div> 

    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
      <input type="password" name="password_confirmation" class="form-control">
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Foto Profil</label>
      <input type="file" name="image" class="form-control">
        @if(Auth::user()->image)
      <img src="{{ asset('storage/assets/' . Auth::user()->image) }}" width="100" class="mt-2 rounded" alt="Foto Profil">
        @endif
    </div>

    

    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
  </form>
</div>

@endsection
