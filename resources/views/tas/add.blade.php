@extends('template_bs');
@section('content')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Tas</h3>

    <a href="/tas" class="btn btn-info"> Kembali</a>

    <br />
    <br />
    <div class="container">
        {{-- action mengarah ke tas/store untuk dilakukan routing --}}
        <form action="/tas/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group has-success">
                <label class="control-label col-sm-2 mt-3" for="merk">
                    Merk
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="merk" placeholder="Masukan Nama Merk" name="merk"
                        required="required">
                </div>

                <label class="control-label col-sm-2 mt-3" for="price">
                    Harga
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="price" placeholder="Masukan Harga" name="price"
                        required="required">
                </div>

                <label class="control-label col-sm-2 mt-3" for="availability">
                    Ketersediaan
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="checkbox" id="availability" placeholder="Masukan Ketersediaan"
                        name="availability" required="required">
                </div>

                <label class="control-label col-sm-2 mt-3" for="weight">
                    Berat
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="weight" placeholder="Masukan Berat" name="weight"
                        required="required">
                </div>
                <input type="submit" value="Simpan Data" class="btn btn-success mt-3">
        </form>
    </div>
@endsection
