<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
DB::enableQueryLog();
use App\Model\penjurusan;
use Illuminate\Http\Request;
use Session;

class penjurusanController extends Controller
{


    public function index()
    {
        $penjurusan = penjurusan::all();
        return view('penjurusan/index',['penjurusan' => $penjurusan]);
    }

    public function create()
    {
        return view('penjurusan/create');
    }

    public function store(Request $request)
    {
       $penjurusan                    = new penjurusan;
       $penjurusan->Universitas       = $request->universitas;
       $penjurusan->Fakultas          = $request->fakultas;
       $penjurusan->Prodi             =$request->prodi;
       $penjurusan->passingGrade       =$request->pasingGrade;
       $penjurusan->save();

       return redirect('penjurusan');
   }
   public function show($id)
    {
        $penjurusan = penjurusan::findOrFail($id);

        return view('penjurusan.show', compact('pegawai'));
    }

}
