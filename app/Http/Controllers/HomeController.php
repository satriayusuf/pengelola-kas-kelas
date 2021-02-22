<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use App\Datakeluar;
use App\Multimedia;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $masuk = DB::table('data')->sum('jumlah');
        $keluar = DB::table('datakeluar')->sum('jumlahkeluar');
        $semua = $masuk - $keluar;
        return view('bundahara.home', compact('semua'));
    }

    public function data()
    {   
        $datakeluar = Datakeluar::all();
        $data = Data::all();
        $total = DB::table('data')->sum('jumlah');
        $totalkeluar = DB::table('datakeluar')->sum('jumlahkeluar');
        return view('bundahara.data', compact('data', 'total', 'datakeluar', 'totalkeluar'));
    }

    public function formdata()
    {
        return view('bundahara.tambah');
    }

    public function tambahdata(Request $request)
    {    
         $this->validate($request, [
            'name' => 'required',
            'jumlah' => 'required',
            'date' => 'required',
        ]);

        Data::create([
            'name' => $request->get('name'),
            'jumlah' => $request->get('jumlah'),
            'date' => $request->get('date'),
        ]);
        return redirect('/datakas');
    }

    public function datakeluar()
    {
        return view('bundahara.datakeluar');
    }

     public function prosesdata(Request $request)
    {    
         $this->validate($request, [
            'deskripsi' => 'required',
            'jumlahkeluar' => 'required',
            'date' => 'required',
        ]);
        Datakeluar::create([
            'deskripsi' => $request->get('deskripsi'),
            'jumlahkeluar' => $request->get('jumlahkeluar'),
            'date' => $request->get('date'),
        ]);

        return redirect('/datakas');
    }

    Public function multimedia()
    {
        $multi = Multimedia::all();
        return view('bundahara.multimedia', ['multi' => $multi]);
    }

    public function timeZone($location){
        return date_default_timezone_set($location);
    }

    Public function multitambah()
    {
        $this->timeZone('Asia/Jakarta');

        return view('bundahara.multitambah');
    }

        public function multiproses(Request $request)
    {
            $this->validate($request,[
            'file' => 'required|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
            'name' => 'required|string',
            'date' => 'required|string',
            'time' => 'required|string'
        ]);
        
        if($request->file)
        {
            $file = $request->file('file');
            $acak  = $file->getClientOriginalExtension();
            $fileName = $file->getClientOriginalname(); 
            $request->file('file')->move("file/", $fileName);
            $file = $fileName;
        } else {
            $file = NULL;
        }
        // dd($file);

        Multimedia::create([
            'name' => $request->get('name'),
            'date' => $request->get('date'),
            'time' => $request->get('time'),
            'file' => $file
        ]);
        return redirect('/multi');
    }

     public function multiupdate($id){
        $update = Multimedia::find($id);
        return view('bundahara.multiupdate', ['update' => $update]);
    }

    public function prosesupdate($id, Request $request)
    {
        if($request->file)
        {
            $file = $request->file('file');
            $acak  = $file->getClientOriginalExtension();
            $fileName = $file->getClientOriginalname(); 
            $request->file('file')->move("file/", $fileName);
            $file = $fileName;
        } else {
            $file = NULL;
        }

        // dd($file);

        Multimedia::find($id)->update([
            'name' => $request->get('name'),
            'date' => $request->get('date'),
            'time' => $request->get('time'),
            'file' => $file
        ]);

        return redirect('/multi');
    }

    Public function multihapus($id)
    {
        $Multimedia = Multimedia::find($id);
        $Multimedia->delete();
        return redirect('/multi');
    }
}
