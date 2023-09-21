<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    function index()
    {
        $pegawai = DB::table('pegawai')->orderBy('id')->get();
        $data = [
            'title' => 'Data Pegawai',
            'welcome' => "Hallo selamat datang",
            'pegawai' => $pegawai,
        ];
        return view('builder/pegawai', $data);
    }
    function tambah(): View
    {
        $data = [
            'title' => "Tambah pegawai",
        ];
        return view('builder/tambah', $data);
    }
    function store(Request $req)
    {
        $data = [
            'nama' => $req->nama,
            'hp' => $req->hp,
            'jabatan' => $req->jabatan,
            'alamat' => $req->alamat,
        ];
        DB::table('pegawai')->insert($data);
        return redirect('pegawai');
    }
    function edit($id): View
    {
        $pegawai = DB::table('pegawai')->where('id', $id)->first();
        $data = [
            'title' => "Edit pegawai",
            'pegawai' => $pegawai,
        ];
        return view('builder/edit', $data);
    }
    function update(Request $req)
    {
        $data = [
            'id' => $req->id,
            'nama' => $req->nama,
            'hp' => $req->hp,
            'jabatan' => $req->jabatan,
            'alamat' => $req->alamat,
        ];
        DB::table('pegawai')->where('id', $req->id)->update($data);
        return redirect('pegawai');
    }
    function hapus(Request $request)
    {
        $id = $request->id;
        DB::table('pegawai')->delete($id);
        return redirect('pegawai');
    }
}
