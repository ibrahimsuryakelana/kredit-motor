<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	protected $primaryKey='id_admin';
    protected $table = 'admin';
    protected $fillable = ['id_admin','nama_admin','jk','alamat','telp'];
}
