<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Sercom;

class SercomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Sercom::all();
        return view('sercom.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sercom.create');
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
            'sercom_name' => 'required',
            'sercom_code' => 'required',
            'sercom_logo' => 'file|max:1500|mimes:jpg,jpeg,png'
        ]);

        $sercom = new Sercom();
        $sercom->sercom_name = $request->sercom_name;
        $sercom->sercom_code = $request->sercom_code;
        $sercom->sercom_pic = $request->sercom_pic;
        $sercom->sercom_phone = $request->sercom_phone;
        $sercom->sercom_email = $request->sercom_email;
        $sercom->sercom_address = $request->sercom_address;

        if($request->hasFile('sercom_logo')){
            $file = $request->file('sercom_logo');
            $extension = $file->getClientOriginalExtension();
            $filename = 'SERCOM-LOGO-' . time() . '.' . $extension;
            $file->move('uploads', $filename);
            $sercom->sercom_logo = $filename;
        }

        $sercom->sercom_status = $request->status;
        $sercom->save();

        if (isset($_POST['tambah_lagi'])) {
            return redirect('sercom/create')->with('success', 'Berhasil menambah data');
        } else if (isset($_POST['simpan'])) {
            return redirect('sercom')->with('success', 'Berhasil menambah data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sercom $sercom)
    {
        //
        return view('sercom.detail', ['data' => $sercom]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sercom $sercom)
    {
        //
        return view('sercom.edit', ['data' => $sercom]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sercom $sercom)
    {
        //
        $request->validate([
            'sercom_name' => 'required',
            'sercom_code' => 'required',
            'sercom_logo' => 'file|max:1500|mimes:jpg,jpeg,png'
        ]);

        $sercom = $sercom;

        if($request->hasFile('sercom_logo')){
            $file = $request->file('sercom_logo');
            $extension = $file->getClientOriginalExtension();
            $filename = 'SERCOM-LOGO-' . time() . '.' . $extension;
            $file->move('uploads', $filename);
            File::delete('uploads/' . $sercom->sercom_logo);
        }else{
            $filename = $sercom->sercom_logo;
        }

        $sercom->sercom_name = $request->sercom_name;
        $sercom->sercom_code = $request->sercom_code;
        $sercom->sercom_pic = $request->sercom_pic;
        $sercom->sercom_phone = $request->sercom_phone;
        $sercom->sercom_email = $request->sercom_email;
        $sercom->sercom_address = $request->sercom_address;
        $sercom->sercom_logo = $filename;
        $sercom->sercom_status = $request->status;
        $sercom->save();

        return redirect('sercom')->with('success', 'Berhasil merubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sercom $sercom)
    {
        //
        $sercom->delete();
        File::delete('uploads/' . $sercom->sercom_logo);
        return redirect('sercom')->with('success', 'Berhasil menghapus data');
    }
}
