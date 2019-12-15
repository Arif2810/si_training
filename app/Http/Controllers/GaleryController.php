<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests;
use App\Galery;
use File;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $galeries = Galery::orderBy('id_galeri', 'DESC')->get();
        return view('admin.galery.index', ['galeries'=>$galeries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
          'deskripsi' => 'required',
          'image' => 'required|image|mimes:jpg,jpeg,png,JPG,JPEG,PNG|max:2000',
      ]);

      $galeries = new Galery;
      $galeries->id_galeri   = $request->id_galeri;
      $galeries->deskripsi = $request->deskripsi;

      if($request->hasFile('image')){
        $file = $request->file('image');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/image');
        $file->move($destinationPath, $fileName);
        $galeries->image = $fileName;
      }

      $galeries->save();
      // dd('kesini');
      return back()->with('pesan', 'Foto berhasil di upload');
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
    public function destroy(Request $request)
    {
      $galeries = Galery::find($request->id_galeri);
      File::delete('image/'.$galeries->image);
      $galeries->delete();

      return back()->with('pesan', 'Data berhasil dihapus');
    }
}
