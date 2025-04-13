<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KasMasjid;
use Illuminate\Http\Request;

class KasMasjidController extends Controller
{
    public function index()
    {
        $kasMasjid = KasMasjid::all();
        return view('admin.kas.index', compact('kasMasjid'));
    }

    public function create()
    {
        return view('admin.kas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kas_awal' => 'required|numeric',
            'pemasukan' => 'required|numeric',
            'pengeluaran' => 'required|numeric',
        ]);

        KasMasjid::create($request->all());
        return redirect()->route('kas.index')->with('success', 'Data kas berhasil ditambahkan.');
    }

    public function edit(KasMasjid $kasMasjid)
    {
        return view('admin.kas.edit', compact('kasMasjid'));
    }

    public function update(Request $request, KasMasjid $kasMasjid)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kas_awal' => 'required|numeric',
            'pemasukan' => 'required|numeric',
            'pengeluaran' => 'required|numeric',
        ]);

        $kasMasjid->update($request->all());
        return redirect()->route('admin.kas.index')->with('success', 'Data kas berhasil diperbarui.');
    }

    public function show(KasMasjid $kasMasjid)
    {
        return view('admin.kas.show', compact('kasMasjid'));
    }

    public function destroy(KasMasjid $kasMasjid)
    {
        $kasMasjid->delete();
        return redirect()->route('admin.kas.index')->with('success', 'Data kas berhasil dihapus.');
    }
}