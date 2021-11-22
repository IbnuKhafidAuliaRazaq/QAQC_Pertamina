<?php

namespace App\Http\Controllers;

use App\OAS;
use Illuminate\Http\Request;

class OASController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = OAS::all();
        return view('oas.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('oas.create');
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
            'oas_title' => 'required',
            'oas_code' => 'required|unique:oas,oas_code',
            'oas_start' => 'required',
            'oas_end' => 'required'
        ]);

        $oas = new OAS();
        $oas->oas_title = $request->oas_title;
        $oas->oas_description = $request->oas_description;
        $oas->oas_code = $request->oas_code;
        $oas->oas_start = $request->oas_start;
        $oas->oas_end = $request->oas_end;
        $oas->oas_pic = $request->oas_pic;
        $oas->oas_status = $request->status;
        $oas->save();

        if (isset($_POST['tambah_lagi'])) {
            return redirect('oas/create')->with('success', 'Berhasil menambah data');
        } else if (isset($_POST['simpan'])) {
            return redirect('oas')->with('success', 'Berhasil menambah data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OAS  $oAS
     * @return \Illuminate\Http\Response
     */
    public function show(OAS $oas)
    {
        //
        return view('oas.detail', ['oas' => $oas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OAS  $oAS
     * @return \Illuminate\Http\Response
     */
    public function edit(OAS $oas)
    {
        //
        return view('oas.edit', ['oas' => $oas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OAS  $oAS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OAS $oas)
    {
        //
        $request->validate([
            'oas_title' => 'required',
            'oas_code' => 'required',
            'oas_start' => 'required',
            'oas_end' => 'required'
        ]);
        $oas->oas_title = $request->oas_title;
        $oas->oas_description = $request->oas_description;
        $oas->oas_code = $request->oas_code;
        $oas->oas_start = $request->oas_start;
        $oas->oas_end = $request->oas_end;
        $oas->oas_pic = $request->oas_pic;
        $oas->oas_status = $request->status;
        $oas->save();

        return redirect('oas')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OAS  $oAS
     * @return \Illuminate\Http\Response
     */
    public function destroy(OAS $oas)
    {
        //
        $oas->delete();
        return redirect('oas')->with('success', 'Berhasil menghapus data');
    }
}
