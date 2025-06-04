@extends('template_bs');
@section('content')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai" class="btn btn-info"> Kembali</a>

    <br />
    <br />
    <div class="container">
        {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
        <form action="/pegawai/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group has-success">
                <label class="control-label col-sm-2 mt-3" for="nama">
                    Nama
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="nama" placeholder="Masukan Nama Lengkap"
                        name="nama" required="required">
                </div>

                <label class="control-label col-sm-2 mt-3" for="jabatan">
                    Jabatan
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="jabatan" placeholder="Masukan Jabatan" name="jabatan"
                        required="required">
                </div>

                <label class="control-label col-sm-2 mt-3" for="umur">
                    Umur
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="umur" placeholder="Masukan Umur" name="umur"
                        required="required">
                </div>

                <label class="control-label col-sm-2 mt-3" for="alamat">
                    Alamat
                </label>
                <div class="col-sm-6">
                    <textarea class="form-control" type="text" id="alamat" placeholder="Masukan Alamat" name="alamat"
                        required="required"></textarea>
                </div>
                <input type="submit" value="Simpan Data" class="btn btn-success mt-3">
        </form>
    </div>
@endsection
