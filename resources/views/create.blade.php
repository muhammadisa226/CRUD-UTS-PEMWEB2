@extends('layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tambah Data Kendaraan</h1>
    </div>
    <div class="col-lg-8">

        <form method="POST" action="/vehicle" class="mb-5">
            @csrf
            <div class="mb-3">
              <label for="no_polisi" class="form-label">Nomer Polisi</label>
              <input type="text" class="form-control @error('no_polisi') is-invalid @enderror" id="no_polisi"  name="no_polisi" autofocus value="{{ old('no_polisi') }}">
              @error('no_polisi')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="merk" class="form-label">Merk Kendaraan</label>
              <input type="text" class="form-control @error('merk') is-invalid @enderror " id="merk"  name="merk">
              @error('merk')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tipe" class="form-label">Tipe Kendaraan</label>
              <input type="text" class="form-control @error('tipe') is-invalid @enderror " id="tipe"  name="tipe">
              @error('tipe')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/vehicle" class="btn btn-danger">Back</a>
          </form>
    </div>
</main>
@endsection
