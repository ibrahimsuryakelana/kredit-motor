<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembeli;


class PembeliController extends Controller
{
    public function index()
    {
        $data_pembeli = Pembeli::all();
        return view('pembeli.index',['data_pembeli' => $data_pembeli]);
    }
    public function create(Request $request)
    {
    	Pembeli::create($request->all());
    	
    	return redirect('/pembeli')->with('sukses','Data Berhasil Di input');
    }

    public function edit($id_pembeli)
    {
    	$pembeli = Pembeli::find($id_pembeli);
    	return view('pembeli/edit',['pembeli'=> $pembeli]); 
    }

    public function update(Request $request, $pembeli)
    {
    	$pembeli = Pembeli::find($pembeli);
    	$pembeli->update($request->all());
    	return redirect('/pembeli')->with('sukses','Data Berhasil Di update');
    }

    public function delete($id_pembeli)
    {
    	$pembeli = Pembeli::find($id_pembeli);
        $pembeli -> delete($pembeli);
        return redirect('/pembeli')->with ('sukses', 'Data Berhasil Di Hapus');  
    }
}
