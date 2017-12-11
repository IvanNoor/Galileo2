<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
DB::enableQueryLog();
use App\siswa;
use App\Model\detail_nilai;
use App\Model\penjurusan;
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
        $siswa = siswa::findOrFail($id);
        $detail_nilai2 = detail_nilai::DetailNilai()
        ->where('siswas.id_siswa','=',$id)
        ->get();

        
        $jumlahDetail = detail_nilai::DetailNilai()
        ->where('siswas.id_siswa','=',$id)
        ->get()->count();
        
        $nilai = DB::table('detail_nilai')
        ->where('id_siswa','=',$id)
        ->get()->toArray();

        $passing = 0;
        for ($i=0; $i<$jumlahDetail ; $i++) { 
            $nilaiTotal[$i] =   ($nilai[$i]->nilai1+
                $nilai[$i]->nilai2+
                $nilai[$i]->nilai3+
                $nilai[$i]->nilai4)/4;
            $passing+=$nilaiTotal[$i];
        }
        $passing = $passing/$jumlahDetail;
        


        $penjurusan = penjurusan::where('PAssingGrade','<',$passing)->get();


        return view('raport/check',['siswa' => $siswa,'detail_nilai2' => $detail_nilai2,'detail_nilai' => $detail_nilai2 ,'nilaiTotal' => $nilaiTotal,'penjurusan' => $penjurusan]);
    }
    
}
