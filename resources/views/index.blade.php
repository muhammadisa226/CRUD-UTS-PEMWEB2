@extends('layouts.main')

@section('container')
    <div class="container">
      <div class="row">
          <div class="col">
              <a href="/vehicle/create" class="btn btn-primary mt-3">Tambah Data Kendaraan</a>
              @if(session()->has('success'))
              <div class="div mt-2" >
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
                @endif
              <h2 class="mt-2">
                  Daftar Data Kendaraan
              </h2>
              <table class="table">

                  <thead>
                      <tr>

                          <th scope="col">#</th>
                          <th scope="col">No.Polisi</th>
                          <th scope="col">Merk Kendaraan</th>
                          <th scope="col">Tipe Kendaraan</th>
                          <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @forelse($vehicles as $vehicle)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $vehicle->no_polisi }}</td>
                            <td>{{ $vehicle->merk }}</td>
                            <td>{{ $vehicle->tipe }}</td>
                            <td>
                                <a href="/vehicle/{{ $vehicle->id }}/edit" class="badge bg-warning text-decoration-none">EDIT</a>
                                <form action="/vehicle/{{ $vehicle->idc }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah Kamu Yakin ? ')"> DELETE</button>
                                </form>
                            </td>
                          </tr>
                          @empty
                            <tr>
                                <td colspan="3">Data Kosong</td>
                            </tr>

                  </tbody>
                  @endforelse
              </table>
          </div>
      </div>
  </div>

  @endsection
