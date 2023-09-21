<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <h2>{{$title}}</h2>
    <form method="POST" action="/pegawai/store" autocomplete="off">
        @csrf
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama"><br>
    <label for="hp">HP</label>
    <input type="text" name="hp" id="hp"><br>
    <label for="jabatan">jabatan</label>
    <input type="text" name="jabatan" id="jabatan"><br>
    <label for="alamat">alamat</label>
    <textarea name="alamat" id="" cols="30" rows="3"></textarea><br>
    <button type="submit">Simpan</button>
    <a href="/pegawai">Kembali</a>
    </form>
</body>
</html>