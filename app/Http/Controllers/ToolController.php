<?php

namespace App\Http\Controllers;

use App\Division;
use App\PartTool;
use App\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $data = Tool::where('division_id', $id)->get();
        $division = Division::find($id);
        if(empty($division)){
            abort(403);
        }
        return view('tool.index', ['data' => $data, 'division' => $division]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $division = Division::where(['id' => $id , 'division_status'=> 1])->first();
        return view('tool.create', ['division' => $division]);
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
            'division_id' => 'required',
            'tool_name' => 'required',
            'tool_code' => 'required',
        ]);

        $tool = new Tool();
        $tool->division_id = $request->division_id;
        $tool->tool_name = $request->tool_name;
        $tool->tool_code = $request->tool_code;
        $tool->minimum_stock = $request->minimum_stock;
        $tool->save();

        if (isset($_POST['tambah_lagi'])) {
            return redirect('divisi_tool/'.$request->division_id.'/create')->with('success', 'Berhasil menambah data');
        } else if (isset($_POST['simpan'])) {
            return redirect('divisi_tool/'.$request->division_id)->with('success', 'Berhasil menambah data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function show($id, Tool $tool)
    {
        //
        return view('tool.detail', ['tool' => $tool]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Tool $tool)
    {
        //
        return view('tool.edit', ['tool' => $tool]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tool $tool)
    {
        //
        $request->validate([
            'tool_name' => 'required',
            'tool_code' => 'required'
        ]);

        $tool->tool_name = $request->tool_name;
        $tool->tool_code = $request->tool_code;
        $tool->minimum_stock = $request->minimum_stock;
        $tool->save();

        return redirect('divisi_tool/'.$tool->division->id)->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Tool $tool)
    {
        //
        $tool->delete();
        return redirect('divisi_tool/'.$tool->division_id)->with('success', 'Berhasil menghapus data');
    }
}
