<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kredit extends Model
{
	protected $primaryKey='id_kredit';
    protected $table = 'kredit';
    protected $fillable = ['id_kredit','id_pembeli','id_motor','tanggal_transaksi','tenor','uang_muka','cicilan_perbulan','sisa_cicilan'];
}