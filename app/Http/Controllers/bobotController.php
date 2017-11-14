<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
DB::enableQueryLog();

use App\Model\penilaian;
use App\pelajaran;
use Illuminate\Http\Request;
use Session;

class bobotController extends Controller
{

   
    public function index(Request $request)
    {
        $penilaian = penilaian::all();
        return view('bobotSoal/index',['penilaian' => $penilaian]);
    }
    public function search(Request $request)
    {
    	dd($request);
    	
    // 	$keyword = $request->get('search');
    //     $perPage = 25;

    //     if (!empty($keyword)) {
    //         $penilaian = penilaian::where('kode', 'LIKE', "%$keyword%")
				// ->paginate($perPage);
    //     } else {
    //         $penilaian = penilaian::paginate($perPage);
    //     }
    }

   
}
