<?php

namespace App\Http\Controllers;

use App\Models\M_Produk;
use Illuminate\Http\Request;

class C_Produk extends Controller
{
    public function index()
    {
        return M_Produk::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'      => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga'     => 'required|numeric',
        ]);

        $produk = M_Produk::create($validated);
        return response()->json($produk);
    }

    public function show($id)
    {
        return M_Produk::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $produk = M_Produk::findOrFail($id);

        $validated = $request->validate([
            'nama'      => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga'     => 'required|numeric',
        ]);

        $produk->update($validated);
        return $produk;
    }

    public function destroy($id)
    {
        $produk = M_Produk::findOrFail($id);
        $produk->delete();

        return response()->json(['message' => 'Produk berhasil dihapus']);
    }
}
