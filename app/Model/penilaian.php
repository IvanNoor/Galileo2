<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
 
class penilaian extends Model
{	
        protected $table	= 'penilaian';
        
        public $timestamps	= false;

		// protected $primaryKey = 'id';

        public function scopePenilaian2($query) {
		return $query->join('kode_soal', 'kode_soal.kode', '=', 'penilaian.kode')
        ->join('pelajarans', 'pelajarans.id', '=', 'kode_soal.id_pelajaran')
        ->select('penilaian.kode', 'pelajarans.Pelajaran')
        ->groupBy('kode','pelajaran');	
	}
}
