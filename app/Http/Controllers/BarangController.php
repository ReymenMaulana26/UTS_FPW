<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tampil()
    {
        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kode_barang = $request->input('kode_barang');
        $nama_barang = $request->input('nama_barang');
        $jenis_varian = $request->input('jenis_varian');
        $qty = $request->input('qty');
        $harga_jual = $request->input('harga_jual');

        // Hitung total harga
        $total_harga = $qty * $harga_jual;

        // Hitung potongan harga
        $potongan_harga = 0;
        if ($total_harga >= 500000) {
            $potongan_harga = 0.5 * $total_harga; // Diskon 50%
        } elseif ($total_harga >= 200000) {
            $potongan_harga = 0.2 * $total_harga; // Diskon 20%
        } elseif ($total_harga >= 100000) {
            $potongan_harga = 0.1 * $total_harga; // Diskon 10%
        }

        // Hitung persentase potongan harga
        $persentase_potongan = ($potongan_harga / $total_harga) * 100;

        // Hitung harga yang harus dibayar
        $harga_bayar = $total_harga - $potongan_harga;

        // Simpan data ke database
        Barang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'jenis_varian' => $request->jenis_varian,
            'qty' => $request->qty,
            'harga_jual' => $request->harga_jual,
        ]);

        // Menampilkan hasil
        return view('hasil', compact(
            'kode_barang',
            'nama_barang',
            'jenis_varian',
            'qty',
            'harga_jual',
            'total_harga',
            'potongan_harga',
            'persentase_potongan',
            'harga_bayar'
        ));
    }

    public function semuaBarang()
{
    $barangs = Barang::all();
    return view('semua-barang', compact('barangs'));
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
