@extends('layout.master')

@section('content')
    <div class="container">
        <h4>Data Peminjam</h4>
        <p align="right"><a href="{{ route('peminjam.create') }}" class="btn btn-primary">Tambah peminjam</a></p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode peminjam</th>
                    <th>Nama Peminjam</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            <tbody>
                @foreach ($data_peminjam as $peminjam)
                <tr>
                    <td>{{ $peminjam->id}}</td>
                    <td>{{ $peminjam->kode_peminjam}}</td>
                    <td>{{ $peminjam->nama_peminjam}}</td>
                    <td>{{ $peminjam->tgl_lahir}}</td>
                    <td>{{ $peminjam->alamat}}</td>
                    <td>{{ !empty($peminjam->telepon['nomor_telepon'])?
                            $peminjam->telepon['nomor_telepon'] : '-'}}
                    </td>
                    <td><a href="{{ route('peminjam.edit', $peminjam->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
                    <td>
                        <form method="post" action="{{ route('peminjam.destroy', $peminjam->id) }}">
                        @csrf
                            <button class="btn btn-warning-sm" onClick="return confirm('Anda Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </thead>
        </table>

        <div class="pull-left">
            <strong>
                Jumlah Peminjam : {{ $jumlah_peminjam}}
            </strong>
        </div>
    </div>
@endsection
