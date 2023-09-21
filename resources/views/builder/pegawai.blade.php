<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .table{
            border-collapse: collapse;
            width: 100%;
        }
        .table,tr, th, td{
            border-style: solid;
            border-width: 1px;
            padding: 4px
        }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <div class="container">
        <h1>{{$welcome}}</h1>
        <a href="pegawai/tambah">Tambah</a>
        <table class="table">
           <thead>
            <tr>
                <th>Nama</th>
                <th>HP</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
           </thead>
           <tbody>
            @foreach ($pegawai as $peg)    
            <tr>
                <td>{{$peg->nama}}</td>
                <td>{{$peg->hp}}</td>
                <td>{{$peg->jabatan}}</td>
                <td>{{$peg->alamat}}</td>
                <td>
                    <a href="pegawai/edit/{{$peg->id}}">Edit</a> |
                    <form action="pegawai/hapus/{{$peg->id}}" method="post" onsubmit="if(!confirm('Hapus?'))return false;">
                        @csrf
                        <button type="submit" >Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
           </tbody>
        </table>
    </div>
</body>
</html>