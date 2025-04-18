<?php

namespace App\Http\Controllers;

use App\Models\JadwalJumat;
use Illuminate\Http\Request;

class JadwalJumatController extends Controller
{
    public function index(Request $request)
    {
        $query = JadwalJumat::query();

        if ($request->filled('imam')) {
            $query->where('imam', 'like', '%' . $request->imam . '%');
        }

        if ($request->filled('muadzin')) {
            $query->where('muadzin', 'like', '%' . $request->muadzin . '%');
        }

        if ($request->filled('khotib')) {
            $query->where('khotib', 'like', '%' . $request->khotib . '%');
        }

        if ($request->filled('tanggal')) {
            $query->whereDate('tanggal', $request->tanggal);
        }

        $jadwal = $query->latest('tanggal')->paginate(10);
        return view('admin.jadwal.index', compact('jadwal'));
    }

    public function create()
    {
        return view('admin.jadwal.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tanggal' => 'required|date',
            'imam' => 'required|string',
            'muadzin' => 'required|string',
            'khotib' => 'required|string',
        ]);

        JadwalJumat::create($data);
        return redirect()->route('admin.jadwal.index')->with('success', 'Jadwal Jumat berhasil ditambahkan.');
    }

    public function edit(JadwalJumat $jadwal)
    {
        return view('admin.jadwal.edit', compact('jadwal'));
    }

    public function update(Request $request, JadwalJumat $jadwal)
    {
        $data = $request->validate([
            'tanggal' => 'required|date',
            'imam' => 'required|string',
            'muadzin' => 'required|string',
            'khotib' => 'required|string',
        ]);

        $jadwal->update($data);
        return redirect()->route('admin.jadwal.index')->with('success', 'Jadwal Jumat berhasil diperbarui.');
    }

    public function show()
    {
        $jadwal = JadwalJumat::latest('created_at')->first();
        return view('partials.footer', compact('jadwal'));
    }    

    public function destroy(JadwalJumat $jadwal)
    {
        $jadwal->delete();
        return redirect()->route('admin.jadwal.index')->with('success', 'Jadwal Jumat berhasil dihapus.');
    }
}