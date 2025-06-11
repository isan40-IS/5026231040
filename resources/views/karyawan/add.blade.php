@extends('template_bs');
@section('content')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Karyawan</h3>

    <a href="/karyawan" class="btn btn-info"> Kembali</a>

    <br />
    <br />
    <div class="container">
        {{-- action mengarah ke karyawan/store untuk dilakukan routing --}}
        <form action="/karyawan/store" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group has-success">
                <div class="row mb-3">
                    <label class="control-label col-sm-2 d-flex align-items-center" for="namalengkap">
                        Kode Pegawai
                    </label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="kodepegawai" placeholder="Masukan Kode Pegawai"
                            name="kodepegawai" required="required">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="control-label col-sm-2 d-flex align-items-center" for="namalengkap">
                        Nama Lengkap
                    </label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="namalengkap" placeholder="Masukan Nama Lengkap"
                            name="namalengkap" required="required">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="control-label col-sm-2 d-flex align-items-center" for="divisi">
                        Divisi
                    </label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="divisi" placeholder="Masukan Divisi"
                            name="divisi" required="required">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="control-label col-sm-2 d-flex align-items-center" for="Departemen">
                        Departemen
                    </label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="departemen" placeholder="Masukan Departemen"
                            name="departemen" required="required">
                    </div>
                </div>

                <input type="submit" value="Simpan Data" class="btn btn-success mt-3">
        </form>
    </div>
@endsection
