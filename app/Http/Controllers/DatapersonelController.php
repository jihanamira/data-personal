<?php

namespace App\Http\Controllers;

use App\Datapersonel;
use App\Pangkat;
use App\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class DatapersonelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pangkat = Pangkat::all();
        
        // dd($pangkat);
        $datapersonel = Datapersonel::with('pangkat')->paginate(100);
        return view('admin.datapersonel.index', compact('datapersonel','pangkat'));
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

        return view('admin.datapersonel.index',compact('datapersonel','pangkat', 'search','search_pangkat'));

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
        return view('admin.Datapersonel.cetakdatapersonel', compact('cetakdatapersonel'));
    }

    public function cetak($id)
   {
        $data = Datapersonel::findOrFail($id);

        return view('admin.Datapersonel.cetak', compact('data'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pangkat = Pangkat::all(); 
        $datapersonel = Datapersonel::all();
        $ruangan = Ruangan::all();
        return view('admin.datapersonel.create', compact('datapersonel','pangkat','ruangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|unique:datapersonel|max:100',

        ]);

     
        $datapersonel = Datapersonel::create([
            'id_pangkat' => $request->id_pangkat,
            'id_ruangan' => $request->id_ruangan,
            'nama' => $request->nama,
            'nrp' => $request->nrp,        
            'jabatan' => $request->jabatan,
            'umum' => $request->umum,
            'polri' => $request->polri,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'skpengangktan' => $request->skpengangktan,
        ]);

       
        //$datakematian->tags()->attach($request->tags);
 
        return redirect()->route('datapersonel.index')->with('success','Postingan anda berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pangkat = Pangkat::all();
        $datapersonel = Datapersonel::findorfail($id);
        $ruangan = Ruangan::all();
        return view('admin.datapersonel.edit', compact('datapersonel', 'pangkat','ruangan')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|max:100',
        ]);

        
        $datapersonel = Datapersonel::findorfail($id);

        $datapersonel_data = [
           'id_pangkat' => $request->id_pangkat,
           'id_ruangan' => $request->id_ruangan,
            'nama' => $request->nama,
            'nrp' => $request->nrp,        
            'jabatan' => $request->jabatan,
            'umum' => $request->umum,
            'polri' => $request->polri,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'skpengangktan' => $request->skpengangktan,
            ];       


        //$post->tags()->sync($request->tags);
        $datapersonel->update($datapersonel_data);
 
        
        return redirect()->route('datapersonel.index')->with('success','Postingan anda berhasil diupdate'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datapersonel = Datapersonel::findorfail($id);
        $datapersonel->delete();

        return redirect()->back()->with('success','datapersonel Berhasil Dihapus');
    }
}
