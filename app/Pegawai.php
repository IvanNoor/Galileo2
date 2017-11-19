<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pegawai extends Authenticatable
{
    use Notifiable;
 
    protected $guard = 'admin';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pegawais';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nama', 'Alamat', 'JenisKelamin', 'TempatLahir', 'TglLahir', 'NoKtp','Jabatan' ,'Password'];

    
}
