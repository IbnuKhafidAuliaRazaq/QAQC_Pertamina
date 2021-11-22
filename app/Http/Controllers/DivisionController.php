<?php

namespace App\Http\Controllers;

use App\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Division::all();
        return view('division.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('division.create');
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
            'division_code' => 'required',
            'division_name' => 'required',
        ]);

        $division = new Division();
        $division->division_code = $request->division_code;
        $division->division_name = $request->division_name;
        $division->save();

        if (isset($_POST['tambah_lagi'])) {
            return redirect('division/create')->with('success', 'Berhasil menambah data');
        } else if (isset($_POST['simpan'])) {
            return redirect('division')->with('success', 'Berhasil menambah data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(Division $division)
    {
        //
        return view('division.detail', ['division' => $division]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function edit(Division $division)
    {
        //
        return view('division.edit', ['division' => $division]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Division $division)
    {
        //
        $request->validate([
            'division_code' => 'required',
            'division_name' => 'required',
        ]);

        $division->division_code = $request->division_code;
        $division->division_name = $request->division_name;
        $division->save();

        return redirect('division')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy(Division $division)
    {
        //
        $division->delete();
        return redirect('division')->with('success', 'Berhasil menghapus data');
    }
}
