<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataSosialCreate;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Pages.index');
    }

    public function dasos()
    {
        $cekid = dataSosialCreate::count();
        if ($cekid == 0) {
            $no_mr = 100011;
        } else {
            $continue = dataSosialCreate::all()->last();
            $temp = (int)substr($continue->fs_mr, -6) + 1;
            $no_mr = $temp;
        }
        return view('Pages.data-sosial', ['no_mr' => $no_mr]);
    }

    public function registrasi()
    {
        return view('Pages.registrasi');
    }


    public function registrasiSearch(Request $request)
    {
        $data = [];

        $request->filled('q');
        $data = dataSosialCreate::select("fs_mr", "fs_nama", "fs_alamat")
            ->where('fs_nama', 'LIKE', '%' . $request->get('q') . '%')
            ->get();

        // dd($data);

        return response()->json($data);


        // $getPasien = dataSosialCreate::all();
        // return view('Pages.registrasi', [
        //     'pasien' => $getPasien
        // ]);
    }

    public function antrian()
    {
        return view('Pages.antrian');
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
