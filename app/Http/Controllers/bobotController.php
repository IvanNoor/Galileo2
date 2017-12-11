<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\pelajaran;
use App\Model\Penilaian;
use Illuminate\Http\Request; 
use Session;

class bobotController extends Controller
{


    public function index(Request $request)
    {
        $penilaian = penilaian::all();
        $penilaian2 = penilaian::Penilaian2()->get();
        
        
        return view('bobotSoal/index',['penilaian' => $penilaian,'penilaian2' => $penilaian2]);
    }
    public function search($id)
    {
        $penilaian = penilaian::where('kode', 'LIKE', $id)->get();
        $penilaian2 = penilaian::Penilaian2()->get();

        // Session::flash('message', 'This is a message!'); 

        return view('bobotSoal/index',['penilaian' => $penilaian,'penilaian2' => $penilaian2]);
    }


}
