<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// panggil model pegawai
use App\Models\Pegawai;
 
 
class PegawaiController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai
    	//$pegawai = Pegawai::where('nama','Endah Mandasari')->get();
 
        $pegawai = Pegawai::paginate(4);
    	// mengirim data pegawai ke view pegawai
    	return view('pegawai', ['pegawai' => $pegawai]);
    }
 
}