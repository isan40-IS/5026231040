@extends('template_bs');
@section('content')
    <h3>Data Tas</h3>

    <a href="/tas/tambah" class="btn btn-primary"> + Tambah Tas Baru</a>

    <br />
    <p>Cari Data Tas :</p>
    {{-- tidak perlu csrf karena pakai get --}}
    <form action="/tas/cari" method="GET">
        <input type="text" name="cari" class="form-control" placeholder="Cari Tas .." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-success">
    </form>

    <table class="table table-stripped">
        <tr>
            <th>Merk</th>
            <th>Harga</th>
            <th>Ketersediaan</th>
            <th>Berat</th>
        </tr>
        @foreach ($tas as $t)
            <tr>
                <td>{{ $t->merk }}</td>
                <td>{{ $t->price }}</td>
                <td>{{ $t->availability }}</td>
                <td>{{ $t->weight }}</td>
                <td>
                    <a href="/tas/edit/{{ $t->tas_id }}" class="btn btn-success">Edit</a>
                    <a href="/tas/hapus/{{ $t->tas_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $tas->links() }}
@endsection
