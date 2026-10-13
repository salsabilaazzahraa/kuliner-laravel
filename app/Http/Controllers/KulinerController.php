<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
class KulinerController extends Controller
{
    // Halaman Beranda: menampilkan 3 kuliner pilihan + jumlah seluruh kuliner
    public function home()
    {
        $semua    = Kuliner::all();
        $unggulan = array_slice($semua, 0, 3);
        $total    = count($semua);

        return view('home', compact('unggulan', 'total'));
    }

    // Halaman Katalog: menampilkan seluruh item dari array
    public function index()
    {
        $kuliners = Kuliner::all();

        return view('kuliner.index', compact('kuliners'));
    }

    // Halaman Detail: mengambil satu data berdasarkan ID di URL (/kuliner/{id})
    public function show($id)
    {
        $kuliner = Kuliner::find($id);

        // Jika ID tidak ada di array, tampilkan halaman 404
        if (!$kuliner) {
            abort(404, 'Kuliner tidak ditemukan');
        }

        // Tiga kuliner lain sebagai rekomendasi di bawah detail
        $lainnya = array_slice(
            array_filter(Kuliner::all(), fn ($k) => $k['id'] !== $kuliner['id']),
            0,
            3
        );

        return view('kuliner.show', compact('kuliner', 'lainnya'));
    }
}
