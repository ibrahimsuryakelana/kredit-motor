<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data_admin = Admin::all();
        return view('admin.index',['data_admin' => $data_admin]);
    }
    public function create(Request $request)
    {
    	Admin::create($request->all());
    	
    	return redirect('/admin')->with('sukses','Data Berhasil Di input');
    }

    public function edit($id_admin)
    {
    	$admin = Admin::find($id_admin);
    	return view('admin/edit',['admin'=> $admin]); 
    }

    public function update(Request $request, $admin)
    {
    	$admin = Admin::find($admin);
    	$admin->update($request->all());
    	return redirect('/admin')->with('sukses','Data Berhasil Di update');
    }

    public function delete($id_admin)
    {
    	$admin = Admin::find($id_admin);
        $admin -> delete($admin);
        return redirect('/admin')->with ('sukses', 'Data Berhasil Di Hapus');  
    }
}
