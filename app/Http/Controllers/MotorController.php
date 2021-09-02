<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motor;

class MotorController extends Controller
{
    public function index()
    {
        $data_motor = Motor::all();
        return view('motor.index',['data_motor' => $data_motor]);
    }
    public function create(Request $request)
    {
    	Motor::create($request->all());
    	
    	return redirect('/motor')->with('sukses','Data Berhasil Di input');
    }

    public function edit($id_motor)
    {
    	$motor = Motor::find($id_motor);
    	return view('motor/edit',['motor'=> $motor]); 
    }

    public function update(Request $request, $motor)
    {
    	$motor = Motor::find($motor);
    	$motor->update($request->all());
    	return redirect('/motor')->with('sukses','Data Berhasil Di update');
    }

    public function delete($id_motor)
    {
    	$motor = Motor::find($id_motor);
        $motor -> delete($motor);
        return redirect('/motor')->with ('sukses', 'Data Berhasil Di Hapus');  
    }

}
