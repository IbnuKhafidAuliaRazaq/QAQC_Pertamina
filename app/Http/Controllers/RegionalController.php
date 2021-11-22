<?php

namespace App\Http\Controllers;

use App\Regional;
use Illuminate\Http\Request;

class RegionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Regional::all();
        return view('regional.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('regional.create');
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
            'regional_name' => 'required',
            'regional_alias' => 'required',
        ]);

        $regional = new Regional;
        $regional->regional_name = $request->regional_name;
        $regional->regional_alias= $request->regional_alias;
        $regional->save();

        if (isset($_POST['tambah_lagi'])) {
            return redirect('regional/create')->with('success', 'Berhasil menambah data');
        } else if (isset($_POST['simpan'])) {
            return redirect('regional')->with('success', 'Berhasil menambah data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function show(Regional $regional)
    {
        //
        return view('regional.detail', ['regional' => $regional]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function edit(Regional $regional)
    {
        //
        return view('regional.edit', ['regional' => $regional]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regional $regional)
    {
        //
        $request->validate([
            'regional_name' => 'required',
            'regional_alias' => 'required',
        ]);

        $regional->regional_name = $request->regional_name;
        $regional->regional_alias = $request->regional_alias;
        $regional->save();

        return redirect('regional')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regional $regional)
    {
        //
        $regional->delete();
        return redirect('regional')->with('success', 'Berhasil menghapus data');
    }
}
