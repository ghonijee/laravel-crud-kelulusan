@extends('component.master')
@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"></h1>
  <div class="card">
    <div class="card-header bg-primary d-flex flex-row">
      <h5 class="h5 mb-2 text-gray-100">Data Siswa</h5>
      <a class="mr-2 ml-auto" href="{{ route('index') }}">
        <span class="ml-2 btn btn-outline-light">Tampil Semua Data</span>
      </a>
      <form class="mr-0 ml-2 form-inline" action="{{ route("show.data") }}" method="get">
        <input type="text" name="search" id="search" class="form-control" placeholder="Masukan Nama">
        <button class="btn btn-success ml-2" type="submit">Cari Data</button>
      </form>
    </div>
    <div class="card-body row shadow">
      <div class="mb-4 col">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="text-center text-primary">
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($datas as $data)

              <tr>
                <td> {{ $data->id }}</td>
                <td> {{ $data->nama }} </td>
                <td> {{ $data->alamat }} </td>
                <td class="text-center">
                  <a href="{{ route('delete.data', ['nis' => $data->id]) }}" class="btn-sm btn-danger btn-circle">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $datas->links() }}
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection

@section('js')

@endsection