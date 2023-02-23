<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\TransaksiExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use DB;
use App\Models\Aktivitas;
use App\Models\Pasien;
use App\Models\Transaksi;
use App\Models\Tindakan;

class InformasiController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_transaksi = Transaksi::where('kode','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_transaksi = Transaksi::all();
        }
        $data_pasien = Pasien::all();
        $data = DB::table('pasien')
                ->join('transaksi', 'transaksi.nama_pasien','=','pasien.nama_lengkap')
                ->get();
        $data_tindakan = Tindakan::all();
        return view('informasi.index',compact('data_pasien','data_transaksi','data','data_tindakan'));
    }
}
