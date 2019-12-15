<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Venue;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venues = Venue::all(); 
        return view('admin.venue.index', ['venues'=>$venues]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_venue' => 'required',
        ]);

        $venues = new Venue;
        $venues->id_venue   = $request->id_venue;
        $venues->nama_venue = $request->nama_venue;
        $venues->save();
        // dd('kesini');

        return redirect('venue')->with('pesan', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
        
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_venue)
    {
        $venues = Venue::find($id_venue);
        return view('admin/venue/edit', compact('venues'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_venue)
    {
        $this->validate($request, [
            'nama_venue' => 'required',
        ]);

        $venues = Venue::find($id_venue);
        $venues->nama_venue = $request->nama_venue;
        $venues->save();
        return redirect('venue')->with('pesan', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // dd($request->id_venue);
        $venues = Venue::find($request->id_venue);
        $venues->delete();
        return back()->with('pesan', 'Data berhasil dihapus');
    }
}
