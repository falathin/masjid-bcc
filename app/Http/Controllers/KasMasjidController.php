<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KasMasjid;
use Illuminate\Http\Request;

class KasMasjidController extends Controller
{
    // Display all records with pagination (History view)

    public function index(Request $request)
    {
        $query = KasMasjid::query();

        // Filter berdasarkan pencarian kata kunci (misal: tanggal atau angka)
        if ($request->filled('search')) {
            $search = $request->input('search');
            // Filter berdasarkan tanggal (as string) or any column you want; here we'll check tanggal formatted as Y-m-d
            $query->whereRaw("DATE_FORMAT(tanggal, '%d-%m-%Y') LIKE ?", ["%{$search}%"])
                ->orWhere('kas_awal', 'like', "%{$search}%")
                ->orWhere('pemasukan', 'like', "%{$search}%")
                ->orWhere('pengeluaran', 'like', "%{$search}%");
        }

        // Filter berdasarkan rentang tanggal
        if ($request->filled('tanggal_start') && $request->filled('tanggal_end')) {
            $query->whereBetween('tanggal', [$request->tanggal_start, $request->tanggal_end]);
        }

        // Filter berdasarkan rentang kas akhir
        if ($request->filled('min_kas') && $request->filled('max_kas')) {
            $query->whereRaw('(kas_awal + pemasukan - pengeluaran) BETWEEN ? AND ?', [
                $request->min_kas,
                $request->max_kas
            ]);
        }

        $kasMasjid = $query->latest()->paginate(10)->appends($request->query());
        return view('admin.kas.index', compact('kasMasjid'));
    }


    public function create()
    {
        $latestKas = KasMasjid::latest()->first();
        return view('admin.kas.create', compact('latestKas'));
    }

    // Store a new record
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kas_awal' => 'required|integer',
            'pemasukan' => 'required|integer',
            'pengeluaran' => 'required|integer',
        ]);

        $kas_awal = (int) $request->input('kas_awal');
        $pemasukan = (int) $request->input('pemasukan');
        $pengeluaran = (int) $request->input('pengeluaran');
        $kas_akhir = $kas_awal + $pemasukan - $pengeluaran;

        KasMasjid::create([
            'tanggal' => $request->input('tanggal'),
            'kas_awal' => $kas_awal,
            'pemasukan' => $pemasukan,
            'pengeluaran' => $pengeluaran,
            'kas_akhir' => $kas_akhir,
        ]);

        return redirect()->route('admin.kas.index')->with('success', 'Data kas berhasil ditambahkan.');
    }

    // Show the form for editing an existing record
    public function edit(KasMasjid $kasMasjid)
    {
        return view('admin.kas.edit', compact('kasMasjid'));
    }

    // Update an existing record
    public function update(Request $request, KasMasjid $kasMasjid)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kas_awal' => 'required|integer',
            'pemasukan' => 'required|integer',
            'pengeluaran' => 'required|integer',
        ]);

        $kas_awal = (int) $request->input('kas_awal');
        $pemasukan = (int) $request->input('pemasukan');
        $pengeluaran = (int) $request->input('pengeluaran');
        $kas_akhir = $kas_awal + $pemasukan - $pengeluaran;

        $kasMasjid->update([
            'tanggal' => $request->input('tanggal'),
            'kas_awal' => $kas_awal,
            'pemasukan' => $pemasukan,
            'pengeluaran' => $pengeluaran,
            'kas_akhir' => $kas_akhir,
        ]);

        return redirect()->route('admin.kas.index')->with('success', 'Data kas berhasil diperbarui.');
    }

    public function show()
    {
        $kasTerbaru = KasMasjid::latest('created_at')->first(); // Untuk marquee (1 data)
        $kasDetail = KasMasjid::latest('created_at')->take(2)->get(); // Untuk detail (2 data)
        return view('about', compact('kasTerbaru', 'kasDetail'));
    }    

    // Delete a record
    public function destroy(KasMasjid $kasMasjid)
    {
        $kasMasjid->delete();
        return redirect()->route('admin.kas.index')->with('success', 'Data kas berhasil dihapus.');
    }
}