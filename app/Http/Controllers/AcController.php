<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AcController extends Controller
{
    // Create
    public function create()
    {
        // memanggil view tambah
        return view('ac/tambah');
    }

    public function store(Request $request)
    {
        // insert data ke table airconditioner
        DB::table('airconditioner')->insert([
            'merkairconditioner' => $request->merk,
            'hargaairconditioner' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman airconditioner
        return redirect('/tugascrud');
    }

    // Read
    public function read()
    {
        // ambil data dari table airconditioner
        $ac = DB::table('airconditioner')->paginate(10);

        return view('ac/crud', ['ac' => $ac]);
    }

    // Update
    public function edit($ID)
    {
        // mengambil data airconditioner berdasarkan id yang dipilih
        $ac = DB::table('airconditioner')->where('ID', $ID)->get();


        return view('ac/edit', ['airconditioner' => $ac]);
    }

    public function update(Request $request)
    {
        DB::table('airconditioner')->where('ID', $request->id)->update([
            'merkairconditioner' => $request->merk,
            'hargaairconditioner' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/tugascrud');
    }

    // Delete
    public function delete($id)
    {
        // menghapus data airconditioner berdasarkan id yang dipilih
        DB::table('airconditioner')->where('ID', $id)->delete();

        return redirect('/tugascrud');
    }

    // Search
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        $ac = DB::table('airconditioner')
            ->where('merkairconditioner', 'like', "%" . $cari . "%")
            ->paginate();

        return view('ac/crud', ['ac' => $ac]);
    }
}
