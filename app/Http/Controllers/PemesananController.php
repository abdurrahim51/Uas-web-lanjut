<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemesanan = pemesanan::with('produkk')->orderBy('nama_customer', 'asc')->get();


        return view('pemesanan.index', compact('pemesanan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_produkk = Product::all();
        return view('pemesanan.create', compact('data_produkk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_customer' => 'required',
            'produk' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
        ]);

        $input = $request->all();

        pemesanan::create($input);

        return redirect()->route('pemesanan.index')
            ->with('success', 'pemesanan berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pemesanan $pemesanan)
    {
        $data_produkk = Product::all();
        return view('pemesanan.edit', compact('pemesanan', 'data_produkk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pemesanan $pemesanan)
    {
        $request->validate([
            'nama_customer' => 'required',
            'produk' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
        ]);

        $input = $request->all();

        $pemesanan->update($input);

        return redirect()->route('pemesanan.index')
            ->with('success', 'pemesanan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pemesanan $pemesanan)
    {
        $pemesanan->delete();

        return redirect()->route('pemesanan.index')
            ->with('success', 'pemesanan berhasil dihapus');
    }
}
