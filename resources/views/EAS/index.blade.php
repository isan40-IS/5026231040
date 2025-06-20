@extends('template_bs')
@section('content')
    <h3>Nilai</h3>

    <a href="/EAS/tambah" class="btn btn-primary mb-4"> + Tambah Data</a>

    <table class="table table-stripped">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilai as $n)
            <tr>
                <td>{{ $n->id }}</td>
                <td>{{ $n->normorinduksiswa }}</td>
                <td>{{ $n->nilaiangka }}</td>
                <td>{{ $n->sks }}</td>

                <?php
                $angka = $n->nilaiangka;
                $huruf = '';
                if ($angka <= 40) {
                    $huruf = 'D';
                } elseif ($angka <= 60) {
                    $huruf = 'C';
                } elseif ($angka <= 80) {
                    $huruf = 'B';
                } else {
                    $huruf = 'A';
                }
                ?>
                <td>{{ $huruf }}</td>
                <td>{{ $n->nilaiangka * $n->sks }}</td>
            </tr>
        @endforeach
    </table>
    {{ $nilai->links() }}
@endsection
