@extends('layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Data Kendaraan</h1>
    </div>
    <div class="col-lg-8">

        <form method="POST" action="/vehicle/{{ $vehicle->id }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Nomor Polisi</label>
              <input type="text" class="form-control @error('no_polisi') is-invalid @enderror" id="no_polisi"  name="no_polisi" autofocus value="{{ old('no_polisi', $vehicle->no_polisi) }}">
              @error('title')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Merk</label>
              <input type="text" class="form-control @error('merk') is-invalid @enderror " id="merk"  name="merk" value="{{ $vehicle->merk }}">
              @error('merk')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Tipe</label>
              <input type="text" class="form-control @error('tipe') is-invalid @enderror " id="tipe"  name="tipe" value="{{ $vehicle->tipe }}">
              @error('tipe')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>

            </div>
            <button type="submit" class="btn btn-primary">Edit Data</button>
            <a href="/" class="btn btn-danger">Cancel</a>
          </form>
    </div>

</main>
@endsection
