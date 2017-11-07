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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $siswa = siswa::all();
        return view('raport/index',['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function check($id)
    {

        $detail_nilai = DB::table('detail_nilai')
        ->where('id_siswa','=',$id)
        ->get();

        $nilai = DB::table('detail_nilai')
        ->where('id_siswa','=',$id)
        ->get()->toArray();

        var_dump($nilai);
        foreach ($nilai as $nilai) {
            echo "$nilai";
        }
            // while ($row = mysql_fetch_array($nilai)) {
            //     $nilai1 = $row['nilai1'];
            //     $nilai2 = $row['nilai2'];
            //     $nilai3 = $row['nilai3'];
            //     $nilai4 = $row['nilai4'];
            // }            
            // dd($skor1);   
        
        return view('raport/check',['detail_nilai' => $detail_nilai]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {




        return redirect('siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $siswa = siswa::findOrFail($id);

        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $siswa = siswa::findOrFail($id);

        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {

        $requestData = $request->all();
        
        $siswa = siswa::findOrFail($id);
        $siswa->update($requestData);

        Session::flash('flash_message', 'siswa updated!');
        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {

        siswa::destroy($id);

        detail_nilai::where('id_siswa',$id)->delete();

        Session::flash('flash_message', 'siswa deleted!');

        return redirect('siswa');
    }
}
