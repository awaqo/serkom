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
        $ipk = rand(20,40);
        $ipk /= 10;
        return view('user.reg-beasiswa', compact('ipk'));
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
        $result = Beasiswa::all()->last();
        $count = Beasiswa::get()->count();
        // dd($count);
        return view('user.result', compact('result', 'count'));
    }
}
