<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class detail_nilai extends Model
{
	protected $table = 'detail_nilai';

	public $timestamps = false;

	protected $primaryKey = 'id_detail';

	public function scopeDetailNilai($query) {
		return $query->join('siswas', 'siswas.id_siswa', '=', 'detail_nilai.id_siswa')
		->join('pelajarans', 'pelajarans.id', '=', 'detail_nilai.id_pelajaran')
		->select('Nama','Pelajaran','detail_nilai.*');	
	}
}
  