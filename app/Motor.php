<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
	protected $primaryKey='id_motor';
    protected $table = 'motor';
    protected $fillable = ['id_motor','merk','nama_motor','tarif'];
}
