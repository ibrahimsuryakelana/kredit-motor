<?php

namespace App\Http\Controllers;

use App\Cicilan;
use Illuminate\Http\Request;

class CicilanController extends Controller
{
    public function index()
    {
        $data_cicilan = Cicilan::all();
        return view('cicilan.index',['data_cicilan' => $data_cicilan]);
    }
    public function create(Request $request)
    {
    	Cicilan::create($request->all());
    	
    	return redirect('/cicilan')->with('sukses','Data Berhasil Di input');
    }

    public function edit($id_cicilan)
    {
    	$cicilan = Cicilan::find($id_cicilan);
    	return view('cicilan/edit',['cicilan'=> $cicilan]); 
    }

    public function update(Request $request, $cicilan)
    {
    	$cicilan = Cicilan::find($cicilan);
    	$cicilan->update($request->all());
    	return redirect('/cicilan')->with('sukses','Data Berhasil Di update');
    }

    public function delete($id_cicilan)
    {
    	$cicilan = Cicilan::find($id_cicilan);
        $cicilan -> delete($cicilan);
        return redirect('/cicilan')->with ('sukses', 'Data Berhasil Di Hapus');  
    }
}
