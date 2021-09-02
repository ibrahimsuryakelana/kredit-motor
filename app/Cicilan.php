<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cicilan extends Model
{
	protected $primaryKey='id_cicilan';
    protected $table = 'cicilan';
    protected $fillable = ['id_cicilan','id_kredit','nama_pembeli','tanggal_bayar','bayar','total_bayar','sisa_cicilan','sisa_saat_ini'];
}
