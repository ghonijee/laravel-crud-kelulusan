@extends('component.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="card">
    <div class="card-header bg-primary d-flex flex-row">
      <h5 class="h5 mb-2 text-gray-100">Hasil Kelulusan</h5>
      <a class="mr-2 ml-auto" href="{{ route('index') }}">
        <span class="ml-2 btn btn-outline-light">Tampil Semua Data</span>
      </a>
      <form class="mr-0 ml-2 form-inline" action="{{ route("index") }}" method="get">
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
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($datas as $item)
              <tr>
                <td> {{ $item->id }} </td>
                <td> {{ $item->nama }}</td>
                <td> {{ $item->alamat }}</td>
                <td class="text-center">
                  @if ($item->keterangan == "Lulus")
                  <span class="badge-success  px-3 py-1 rounded">{{ $item->keterangan }}</span>
                  @else
                  <span class="badge-danger  px-3 py-1 rounded">{{ $item->keterangan }}</span>
                  @endif
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

@endsection

@section('js')
@endsection