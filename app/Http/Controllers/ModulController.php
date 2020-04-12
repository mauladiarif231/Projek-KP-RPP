<?php

namespace App\Http\Controllers;
use App\Modul;
use Illuminate\Http\Request;
class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modul=Modul::get();
        return view('modul')->with('moduls',$modul);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('create-modul');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $req)
    {
        $modul = new modul();

      $modul->mapel = $req->input('mapel');
      $modul->guru = $req->input('guru');
      $modul->angkatan = $req->input('angkatan');

      if ($req->hasfile('file')) {
        $file =$req->file('file');
        $extension =$file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/item/', $filename);
        $modul->file = $filename;
      } else {
        return $req;
        $modul->file ='';
      }

      $modul->save();
      return redirect('/s');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           modul::where('id',$id)->delete();
      return redirect('/s');
    }
}
