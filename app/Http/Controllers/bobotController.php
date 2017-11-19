<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
DB::enableQueryLog();

use App\pelajaran;
use App\Model\Penilaian;
use Illuminate\Http\Request;
use Session;

class bobotController extends Controller
{


    public function index(Request $request)
    {
        $penilaian = penilaian::all();
        $penilaian2 = DB::table('penilaian')
        ->join('kode_soal', 'kode_soal.kode', '=', 'penilaian.kode')
        ->join('pelajarans', 'pelajarans.id', '=', 'kode_soal.id_pelajaran')
        ->select('penilaian.kode', 'pelajarans.Pelajaran')
        ->groupBy('kode','pelajaran')
        ->get();
            
        

        return view('bobotSoal/index',['penilaian' => $penilaian,'penilaian2' => $penilaian2]);
    }
    public function search($id)
    {
        $penilaian = penilaian::where('kode', 'LIKE', $id)->get();
        $penilaian2 = DB::table('penilaian')
        ->join('kode_soal', 'kode_soal.kode', '=', 'penilaian.kode')
        ->join('pelajarans', 'pelajarans.id', '=', 'kode_soal.id_pelajaran')
        ->select('penilaian.kode', 'pelajarans.Pelajaran')
        ->groupBy('kode','pelajaran')
        ->get();
        

        return view('bobotSoal/index',['penilaian' => $penilaian,'penilaian2' => $penilaian2]);
    }


}
