<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
DB::enableQueryLog();
use App\siswa;
use App\Model\detail_nilai;
use App\pelajaran;
use Illuminate\Http\Request;
use Session;

class raportController extends Controller
{    
    public function index(Request $request)
    {
        $siswa = siswa::all();
        return view('raport/index',['siswa' => $siswa]);
    }

    public function check($id)
    {

        $detail_nilai = DB::table('detail_nilai')
        ->where('id_siswa','=',$id)
        ->get();

        $jumlahDetail = DB::table('detail_nilai')
        ->where('id_siswa','=',$id)
        ->get()->count();
        
        $nilai = DB::table('detail_nilai')
        ->where('id_siswa','=',$id)
        ->get()->toArray();

        for ($i=0; $i<$jumlahDetail ; $i++) { 
            $nilaiTotal[$i] =   $nilai[$i]->nilai1+
                                $nilai[$i]->nilai2+
                                $nilai[$i]->nilai3+
                                $nilai[$i]->nilai4;
        }
     return view('raport/check',['detail_nilai' => $detail_nilai,'nilaiTotal' => $nilaiTotal]);
    }

    
}
