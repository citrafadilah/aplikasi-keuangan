@extends('layout.index')
@section('titles', 'Riwayat - Aplikasi Keuangan')
@section('content')
    <br>
    @if (Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="mb-3">Riwayat Keuangan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Riwayat</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    {{-- <a style="width: 200px" class="btn btn-primary mb-3" href="{{ url('riwayat/create') }}">
                        Tambah Riwayat
                    </a> --}}
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Riwayat Keuangan</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr align="center">
                                            <th>Jenis Transaksi</th>
                                            <th>Deskripsi</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            {{-- <th>AKSI</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($riwayat as $data)
                                            <tr>
                                                <td>{{ $data->jenis_transaksi }}</td>
                                                <td>{{ $data->deskripsi }}</td>
                                                <td>{{ $data->jumlah }}</td>
                                                <td>{{ $data->tanggal }}</td>
                                                <td>{{ $data->keterangan }}</td>
                                                {{-- <td align="center">
                                                    <a href="{{ route('riwayat.edit', $data->id) }}"
                                                        class="btn btn-warning mr-2">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <form style="display: inline"
                                                        action="{{ route('riwayat.destroy', $data->id) }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-danger mr-2" type="submit"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
