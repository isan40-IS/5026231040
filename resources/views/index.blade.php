@extends('template_bs');
@section('content')
    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

    <br />
    <p>Cari Data Pegawai :</p>
    {{-- tidak perlu csrf karena pakai get --}}
    <form action="/pegawai/cari" method="GET">
        <input type="text" name="cari" class="form-control" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-success">
    </form>

    <table class="table table-stripped">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success">Edit</a>
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pegawai->links() }}
@endsection
