<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('newkaryawan')->get();
        return view('newkaryawan.index', compact('karyawan'));
    }

    public function create()
    {
        return view('newkaryawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NIP' => 'required|size:9|unique:newkaryawan,NIP',
            'nama' => 'required|max:50',
            'pangkat' => 'required|max:15',
            'gaji' => 'required|integer'
        ], [
            'NIP.unique' => 'NIP sudah terdaftar',
            'NIP.size' => 'NIP harus 9 karakter'
        ]);

        DB::table('newkaryawan')->insert([
            'NIP' => $request->NIP,
            'nama' => $request->nama,
            'pangkat' => $request->pangkat,
            'gaji' => $request->gaji
        ]);

        return redirect()->route('eas.index')
            ->with('success', 'Data karyawan berhasil ditambahkan');
    }

    public function destroy($NIP)
    {
        DB::table('newkaryawan')->where('NIP', $NIP)->delete();

        return redirect()->route('eas.index')
            ->with('success', 'Data karyawan berhasil dihapus');
    }
}
