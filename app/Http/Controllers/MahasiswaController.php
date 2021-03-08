<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function store(Request $request)
    {
    
        $mahasiswa=Mahasiswa::create($request->all());
        return response() >json([
            'pesan'=>'data berhasil di tambahkan',
            'status'=>'sukses',
            'pesan'=>$mahasiswa
        ]);
    }
}
