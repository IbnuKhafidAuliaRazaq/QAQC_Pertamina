<?php

namespace App\Http\Controllers;

use App\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Zone::all();
        return view('zone.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('zone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'zone_name' => 'required',
            'zone_alias' => 'required',
            'zone_code' => 'required',
        ]);

        $zone = new Zone;
        $zone->zona_name = $request->zone_name;
        $zone->zona_alias= $request->zone_alias;
        $zone->zona_code = $request->zone_code;
        $zone->save();

        if (isset($_POST['tambah_lagi'])) {
            return redirect('zone/create')->with('success', 'Berhasil menambah data');
        } else if (isset($_POST['simpan'])) {
            return redirect('zone')->with('success', 'Berhasil menambah data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function show(Zone $zone)
    {
        //
        return view('zone.detail', ['zone' => $zone]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function edit(Zone $zone)
    {
        //
        return view('zone.edit', ['zone' => $zone]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zone $zone)
    {
        //
        $request->validate([
            'zone_name' => 'required',
            'zone_alias' => 'required',
            'zone_code' => 'required'
        ]);

        $zone->zona_name = $request->zone_name;
        $zone->zona_alias = $request->zone_alias;
        $zone->zona_code = $request->zone_code;
        $zone->save();

        return redirect('zone')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        //
        $zone->delete();
        return redirect('zone')->with('success', 'Berhasil menghapus data');
    }
}
