@extends('template_bs');
@section('content')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Nilai</h3>

    <a href="/EAS" class="btn btn-info"> Kembali</a>

    <br />
    <br />
    <div class="container">
        {{-- action mengarah ke karyawan/store untuk dilakukan routing --}}
        <form action="/EAS/store" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group has-success">
                <div class="row mb-3">
                    <label class="control-label col-sm-2 d-flex align-items-center" for="normorinduksiswa">
                        NRP
                    </label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="normorinduksiswa"
                            placeholder="Masukan Nomor Induk Mahasiswa" name="normorinduksiswa" required="required">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="control-label col-sm-2 d-flex align-items-center" for="nilaiangka">
                        Nilai
                    </label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="namalengkap" placeholder="Masukan Nilai dalam Angka"
                            name="nilaiangka" required="required">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="control-label col-sm-2 d-flex align-items-center" for="sks">
                        SKS
                    </label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="sks" placeholder="Masukan SKS" name="sks"
                            required="required">
                    </div>
                </div>

                <input type="submit" value="Simpan Data" class="btn btn-success mt-3">
        </form>
    </div>
@endsection
