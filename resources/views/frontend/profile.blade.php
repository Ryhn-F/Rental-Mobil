@extends('layouts.userFront')
@section('content')

<div class="container py-5">
  @if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm border-0">
        <div class="card-body text-center">
        <img src="{{ Storage::url(Auth::user()->image) }}" alt="No Photo Profile" class="rounded-circle mb-3" width="120" height="120">
          <h4 class="fw-bold">{{ Auth::user()->name }}</h4>
          <p class="text-muted">{{ Auth::user()->email }}</p>
          <hr>

          <h5 class="mt-4">Informasi Akun</h5>
          <ul class="list-group list-group-flush text-start mt-3">
            <li class="list-group-item"><strong>Nama:</strong> {{ Auth::user()->name }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ Auth::user()->email }}</li>
            <li class="list-group-item"><strong>Role:</strong> {{ Auth::user()->role }}</li>
            <li class="list-group-item"><strong>Bergabung Sejak:</strong> {{ Auth::user()->created_at->format('d M Y') }}</li>
          </ul>
          
          <div class="mt-4">
            <a href="/profile/edit" class="btn btn-primary btn-sm">Edit Profil</a>
            <a href="{{ route('logout') }}" class="btn btn-outline-danger btn-sm">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
