<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
	protected $primaryKey='id_pembeli';
    protected $table = 'pembeli';
    protected $fillable = ['id_pembeli','nama_pembeli','jk','alamat','telp'];
}