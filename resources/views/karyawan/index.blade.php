@extends('template_bs')
@section('content')
    <h3>Data Karyawan</h3>

    <a href="/karyawan/tambah" class="btn btn-primary mb-4"> + Tambah Karyawan Baru</a>

    <table class="table table-stripped">
        <tr>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
        </tr>
        @foreach ($karyawan as $k)
            <tr>
                <td>{{ $k->namalengkap }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ $k->departemen }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $karyawan->links() }}
@endsection
