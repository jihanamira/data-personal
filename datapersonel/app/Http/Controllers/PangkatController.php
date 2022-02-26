<?php

namespace App\Http\Controllers;
use App\Pangkat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $pangkat = Pangkat::paginate(10);
        return view('admin.pangkat.index', compact('pangkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('admin.pangkat.create');
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
            'pangkat' => 'required|min:3'

        ]);

        $pangkat = Pangkat::create([
            'pangkat' => $request->pangkat

        ]);

        return redirect()->back()->with('success','pangkat Berhasil Disimpan');
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
        $pangkat = Pangkat::findorfail($id);
        return view('admin.pangkat.edit', compact('pangkat'));       }

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
            'pangkat' => 'required'
        ]);
         $pangkat = [
            'pangkat' => $request->pangkat,
        ];

        Pangkat::whereId($id)->update($pangkat);

        return redirect()->route('pangkat.index')->with('success','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pangkat = Pangkat::findorfail($id);
        $pangkat->delete();

        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }
}
