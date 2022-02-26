<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapersonel extends Model
{
	protected $fillable = ['id_pangkat','nama','nrp','jabatan','umum','polri','alamat','agama','skpengangktan'];
    protected $table = 'datapersonel';

    public function pangkat(){
        return $this->belongsTo(\App\Pangkat::class,'id_pangkat','id');
	}
}