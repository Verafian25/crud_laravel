<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel = Mapel::with('Dosen')->paginate(5);
        return view ('mapel.index',compact('mapel'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dos   = Dosen::all();
        return view('mapel.create',compact('dos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
         'dosen_id'   => 'required',
         'kode'       => 'required',
         'matkul'     => 'required',
     ]);
     Mapel::create($request->all());

     return redirect()->route('mapel.index')->with('succes','Data Berhasil di Input');

      //   $mapel = new mapel();
      //   $mapel->dosen_id = $request->nama_dosen;
      //   $mapel->kode = $request->kode;
      //   $mapel->matkul = $request->matkul;
      //   $mapel->save();
      //   return redirect()->route('mapel.index')->with('succes','Data Berhasil di Input');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        return view('mapel.show',compact('mapel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapel $mapel)
    {
        return view('mapel.edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapel $mapel)
    {
        $request->validate([
           'dosen_id'  => 'required',
            'kode'      => 'required',
            'matkul'     => 'required',
        ]);

        $mapel->update($request->all());

        return redirect()->route('mapel.index')->with('succes','Siswa Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {
        $mapel->delete();

        return redirect()->route('mapel.index')->with('succes','Siswa Berhasil di Hapus');
    }
}