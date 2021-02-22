<?php

namespace App\Http\Controllers;

use App\Data;
use App\Datakeluar;
Use DB;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $masuk = DB::table('data')->sum('jumlah');
        $keluar = DB::table('datakeluar')->sum('jumlahkeluar');
        $semua = $masuk - $keluar;
        return view('welcome', compact('semua'));
    }
}
