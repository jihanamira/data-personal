<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datapersonel;
use App\Pangkat;
use App\Ruangan;

class DataPersonelRuanganController extends Controller
{
    public function index($id_ruangan)
    {
        $pangkat = Pangkat::all();
        
        // dd($pangkat);
        $datapersonel = Datapersonel::where('id_ruangan', $id_ruangan)->with('pangkat')->paginate(100);
        return view('admin.datapersonelruangan.index', compact('datapersonel','pangkat'));
    }

 public function search(Request $request)
    {
        $pangkat = Pangkat::all();
        $search_pangkat = $request->get('pangkat');
        $search = $request->get('search');
        // dd($request->all());
        if (!$search_pangkat || $search_pangkat == "") {
            // dd('satu');
            $datapersonel = Datapersonel::where('umum','LIKE',"%" .$search. "%")->paginate(100);
        }elseif(!$search || $search == ""){
            // dd('dua');
            $datapersonel = Datapersonel::where('id_pangkat',$search_pangkat)->paginate(100);
        }else{
            // dd('tiga');
            $datapersonel = Datapersonel::where('id_pangkat',$search_pangkat)->where('umum','LIKE',"%" .$search. "%")->paginate(100);
        }
        // dd($datapersonel->all());
        // $datapersonel = Datapersonel::where('id_pangkat','LIKE',"%" .$search_pangkat. "%")->orWhere('umum','LIKE',"%" .$search. "%")->paginate(100);

        return view('admin.datapersonelruangan.index',compact('datapersonel','pangkat', 'search','search_pangkat'));

    }

    public function cetakdatapersonel(Request $request)
    {

        $search_pangkat = $request->get('pangkat');
        $search = $request->get('search');
        // dd($request->all());
        if (!$search_pangkat || $search_pangkat == "") {
            // dd('satu');
            $cetakdatapersonel = Datapersonel::where('umum','LIKE',"%" .$search. "%")->paginate(100);
        }elseif(!$search || $search == ""){
            // dd('dua');
            $cetakdatapersonel = Datapersonel::where('id_pangkat',$search_pangkat)->paginate(100);
        }else{
            // dd('tiga');
            $cetakdatapersonel = Datapersonel::where('id_pangkat',$search_pangkat)->where('umum','LIKE',"%" .$search. "%")->paginate(100);
        }
        // dd($cetakdatapersonel);
        return view('admin.datapersonelruangan.cetakdatapersonel', compact('cetakdatapersonel'));
    }

    public function cetak($id)
   {
        $data = Datapersonel::findOrFail($id);

        return view('admin.datapersonelruangan.cetak', compact('data'));
    } 

}
