<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    function index()
    {
        $ingfo_sakkarepmu = 'Dashboard';
        // ngitung total barang
        $total_barang = DB::table('barangs')->count();

        // ngitung total satuan
        $total_satuan = DB::table('satuans')->select('satuan_id')->distinct()->count();

        // ngitung total users (users)
        $total_users = DB::table('users')->count();

        // Menghitung total semua harga barang
        $total_harga_barang = DB::table('barangs')->sum('harga_barang');

        // Mengirim data ke view
        return view('home', [
            'ingfo_sakkarepmu' => $ingfo_sakkarepmu,
            'total_barang' => $total_barang,
            'total_satuan' => $total_satuan,
            'total_users' => $total_users,
            'total_harga_barang' => $total_harga_barang
        ]);

    }
}
