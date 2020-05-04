@extends('component.master')
@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"></h1>
  <div class="card">
    <div class="card-header bg-primary">
      <h5 class="h5 mb-2 text-gray-100">Masukan Data Siswa</h5>
    </div>
    <div class="card-body row shadow">
      <div class="col-8 offset-1">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Siswa</h1>
        <form action="{{ route('create.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="nis">NIS</label>
            <input name="id" type="text" class="form-control" id="nis" placeholder="NIS">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat Lengkap</label>
            <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat Lengkap"></textarea>
          </div>
          <div class="form-group">
            <label for="alamat">Keterangan Lulus</label>
            <select name="keterangan" id="keterangan" class="form-control">
              <option value="Lulus">Lulus</option>
              <option value="Tidak Lulus">Tidak Lulus</option>
            </select>
          </div>
          <div class="form-group ">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection

@section('js')

@endsection