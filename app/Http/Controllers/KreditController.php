<?php

namespace App\Http\Controllers;

use App\Kredit;
use DB;
use App\Pembeli;
use Illuminate\Http\Request;

class KreditController extends Controller
{
    public function index()
    {
        $data_pembeli = Pembeli::all();
        $data_kredit = Kredit::all();
        $data_pembeli = DB::table('view_kredit')->get();
        
        return view('kredit.index',['data_kredit' => $data_kredit],['data_pembeli' => $data_pembeli]);
    }
    public function create(Request $request)
    {
        Kredit::create($request->all());
        //$data = DB::table('view_kredit')-> get() buat nampilin data view
    	
    	return redirect('/kredit')->with('sukses','Data Berhasil Di input');
    }

    public function edit($id_kredit)
    {
    	$kredit = Kredit::find($id_kredit);
    	return view('kredit/edit',['kredit'=> $kredit]); 
    }

    public function update(Request $request, $kredit)
    {
    	$kredit = Kredit::find($kredit);
    	$kredit->update($request->all());
    	return redirect('/kredit')->with('sukses','Data Berhasil Di update');
    }

    public function delete($id_kredit)
    {
    	$kredit = Kredit::find($id_kredit);
        $kredit -> delete($kredit);
        return redirect('/kredit')->with ('sukses', 'Data Berhasil Di Hapus');  
    }

}
