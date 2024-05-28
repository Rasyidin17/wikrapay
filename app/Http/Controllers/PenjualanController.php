<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penjualan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Penjualan::latest()->paginate(5);

        return view('wikrapay.penjualan.index', compact('penjualan'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        return view('wikrapay.penjualan.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required',
            'jumlah' => 'required',
            'total' => 'required',
        ]);

        $tgl = Carbon::now();

        $penjualan = new Penjualan();
        $penjualan->barang_id = $request->input('barang_id');
        $penjualan->jumlah = $request->input('jumlah');  // Perbaikan untuk menyimpan jumlah dari request
        $penjualan->total = $request->input('total');    // Perbaikan untuk menyimpan total dari request
        $penjualan->tgl = $tgl;
        $penjualan->save();

        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penjualan $penjualan)
    {
        //
    }
}
