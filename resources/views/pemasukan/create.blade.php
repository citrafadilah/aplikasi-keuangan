@extends('layout.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Input Pemasukan</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pemasukan.store') }}" method="POST">
                            @csrf
                            <input type="text" name="jenis_transaksi" id="jenis_transaksi" value="pemasukan" hidden>
                            <div class="form-group">
                                <label for="tanggal">Sumber Pemasukan:</label>
                                <input type="text" name="deskripsi" id="deskripsi" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="jumlah">Jumlah:</label>
                                <input type="number" name="jumlah" id="jumlah" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="tanggal">Tanggal:</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="keterangan">Keterangan:</label>
                                <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
