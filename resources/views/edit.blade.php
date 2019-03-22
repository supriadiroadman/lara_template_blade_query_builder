<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Edit Data Pegawai</h2>
    <a href="/pegawai">Kembali</a> @foreach ($pegawai as $p)
    <form action="/pegawai/update" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$p->pegawai_id}}"><br> Nama <input type="text" name="nama" required="required"
        value="{{$p->pegawai_nama}}"><br> Jabatan <input type="text" name="jabatan" required="required" value="{{$p->pegawai_jabatan}}"><br>        Umur <input type="umur" name="umur" required="required" value="{{$p->pegawai_umur}}"><br> Alamat <textarea name="alamat"
        required="required"> {{$p->pegawai_alamat}}</textarea>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>

</html>
