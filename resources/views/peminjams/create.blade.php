@extends('layout.master')

@section('content')
    <div class="container">
        <h4> Tambah Peminjam</h4>
        <form method="post" action="{{ route('peminjam.store') }}">
        @csrf
            <div class="form-group">
                <label> Kode Peminjam </label>
                <input type="text" name="kode_peminjam" class="form-control">
            </div>
            <div class="form-group">
                <label> nama Peminjam </label>
                <input type="text" name="nama_peminjam" class="form-control">
            </div>
            <div class="form-group">
                <label> Tanggal Lahir </label>
                <input type="date" name="tgl_lahir" class="form-control">
            </div>
            <div class="form-group">
                <label> Alamat </label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label>telepon</label>
                <input type="text" name="telepon" class="form-control">
            </div>
            <div><button type="submit">Simpan</button></div>
    </form>
    </div>
@endsection
