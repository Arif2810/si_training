<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Schedule;
use App\Employee;
use App\Category;
use App\Route;
use App\Venue;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $schedules = Schedule::get();
        return view('admin.schedule.index', ['schedules' => $schedules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        $employees = Employee::all();
        $venues = Venue::all();
        $routes = Route::all();
        $categories = Category::all();

        return view('admin.schedule.create', compact('employees', 'venues', 'routes', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        // insert data
        $schedules = new Schedule;

        $schedules->id_karyawan = $request->id_karyawan;
        $schedules->id_rute = $request->id_rute;
        $schedules->tgl_training = $request->tgl_training;
        $schedules->id_kategori = $request->id_kategori;
        $schedules->id_venue = $request->id_venue;
        $schedules->ket = $request->ket;

        $schedules->save();

        return redirect('schedule')->with('pesan', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_jadwal){

      return view('admin.schedule.show', ['schedules' => Schedule::findOrFail($id_jadwal)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_jadwal){

        $schedules = Schedule::findOrFail($id_jadwal);

        return view('admin.schedule.edit', compact('schedules'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jadwal){

        $schedules = Schedule::find($id_jadwal);

        $schedules->id_karyawan = $request->id_karyawan;
        $schedules->id_rute = $request->id_rute;
        $schedules->tgl_training = $request->tgl_training;
        $schedules->id_kategori = $request->id_kategori;
        $schedules->id_venue = $request->id_venue;
        $schedules->ket = $request->ket;

        $schedules->save();

        return redirect('schedule')->with('pesan', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){

        $schedules = Schedule::find($request->id_jadwal);
        $schedules->delete();
        return back()->with('pesan', 'Data berhasil dihapus');
    }
}
