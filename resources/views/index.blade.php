<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h4>Supriadi Roadman</h4>
    <h2>Data Pegawai</h2>
    <a href="/pegawai/tambah">Tambah data pegawai</a>

    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Jabatan</td>
            <td>Umur</td>
            <td>Alamat</td>
            <td>Opsi</td>
        </tr>
        @foreach ($pegawai as $p)
        <tr>
            <td>{{$p->pegawai_nama}}</td>
            <td>{{$p->pegawai_jabatan}}</td>
            <td>{{$p->pegawai_umur}}</td>
            <td>{{$p->pegawai_alamat}}</td>
            <td>
                <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>
