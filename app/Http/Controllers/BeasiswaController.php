<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.reg-beasiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->file('berkas')) {
            $file = $request->berkas;
            $namaFile = $request->file('berkas')->getClientOriginalName();
            $newName = Str::kebab($namaFile);
            $file->move(public_path('uploads'), $newName);
            $data['berkas'] = $newName;
        }

        // dd($data);
        Beasiswa::create($data);

        return redirect()->route('hasil-daftar')->with('success', 'Berhasil melakukan pendaftaran beasiswa');
    }

    public function show()
    {
        $beasiswa = [
            'Akademik',
            'Non Akademik'
        ];

        $beasiswaCounts = [
            'Akademik' => 0,
            'Non Akademik' => 0
        ];

        foreach ($beasiswa as $b) {
            $data = Beasiswa::where('pilihan_beasiswa', $b)->count();
            $beasiswaCounts[$b] += $data;
        }

        $result = Beasiswa::where('pilihan_beasiswa', '!=', null)->get();
        $count = Beasiswa::get()->count();
        // dd($beasiswaCounts);
        // dd($count);
        return view('user.result', compact('result', 'count', 'beasiswaCounts', 'beasiswa'));
    }

    public function checkEmail(Request $request) {
        $data = Beasiswa::where('email', $request->email)->first();
        return response()->json($data);
    }
}
