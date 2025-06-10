<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Tas</h3>

    <a href="/tas"> Kembali</a>

    <br />
    <br />

    @foreach ($tas as $t)
        <form action="/tas/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $t->tas_id }}"> <br />
            Merk <input type="text" required="required" name="merk" value="{{ $t->merk }}"> <br />
            Harga <input type="number" required="required" name="price" value="{{ $t->price }}"> <br />
            Ketersediaan <input type="checkbox" required="required" name="availability" value="{{ $t->availability }}">
            <br />
            Berat
            <input type="number" required="required" name="weight" value="{{ $t->weight }}"> <br />
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach


</body>

</html>
