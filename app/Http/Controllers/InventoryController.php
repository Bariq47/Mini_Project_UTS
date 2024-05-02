<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Satuan;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Inventory List';
        // ELOQUENT
        $barang = Barang::all();
        return view('Inventory.index', [
            'pageTitle' => $pageTitle,
            'barang' => $barang

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $pageTitle = 'Create Item';
        // ELOQUENT
        $satuann = satuan::all();
        return view('Inventory.create', compact('pageTitle', 'satuann'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka',
            'unique'=> 'Kode Barang ini sudah dipakai'
        ];
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|unique:barang',
            'nama_barang' => 'required',
            'deskripsi_barang' => 'required',
            'harga_barang' => 'required|numeric',

        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $barang = new Barang;
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->satuan_barang = $request->satuan_barang;
        $barang->save();

        return redirect()->route('Inventorys.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Barang Detail';
        $barang = Barang::find($id);
        return view('Inventory.show', compact('pageTitle', 'barang'));;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';

        $satuann=Satuan::all();
        $barang = Barang::find($id);
        return view('Inventory.edit', compact('pageTitle', 'barang','satuann'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka',
            'unique'=> 'Kode Barang ini sudah dipakai'
        ];
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|unique:barang',
            'nama_barang' => 'required',
            'deskripsi_barang' => 'required',
            'harga_barang' => 'required|numeric',

        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $barang = Barang::find($id);
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->satuan_barang = $request->satuan_barang;
        $barang->save();

        return redirect()->route('Inventorys.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::find($id)->delete();
        return redirect()->route('Inventorys.index');
    }
}
