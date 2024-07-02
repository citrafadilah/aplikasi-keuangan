@extends('layout.index')

@section('content')
    <div class="container">
        <h1>Edit Pemasukan</h1>
        <form action="{{ route('pemasukan.update', $pemasukan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="sumber">Sumber Pemasukan</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $pemasukan->deskripsi }}">
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah Pemasukan</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $pemasukan->jumlah }}">
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal Pemasukan</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $pemasukan->tanggal }}">
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="keterangan">{{ $pemasukan->keterangan }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
