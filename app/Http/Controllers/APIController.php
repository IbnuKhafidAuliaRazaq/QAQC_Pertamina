<?php

namespace App\Http\Controllers;

use App\Division;
use App\OAS;
use App\Zone;
use App\Sercom;
use App\Tool;
use App\User;
use App\Report;
use App\MinStock;
use Illuminate\Http\Request;

class APIController extends Controller
{
    //

    public function getDivisiById($id)
    {

        $data = Division::find($id);
        return response()->json($data);
    }

    public function OAS(){
        $data = OAS::all();
        return response()->json($data);
    }

    public function zone(){
        $data = Zone::all();
        return response()->json($data);
    }

    public function getZone($code){
        $data = Zone::where('zona_code', $code)->first();
        return response()->json($data);
    }

    public function getDivision(){
        $data = Division::all();
        return response()->json($data);
    }

    public function getInspector(){
        $data = User::where('level', 3)->get();
        return response()->json($data);
    }

    public function getBarangByDivisi($id){
        $data = Tool::where('division_id', $id)->get();
        return response()->json($data);
    }

    public function sercom(){
        $data = Sercom::all();
        return response()->json($data);
    }

    public function getSercom($code){
        $data = Sercom::where('sercom_code', $code)->first();
        return response()->json($data);
    }

    public function getToolByCode($division , $code){
        $data = Tool::where('division_id', $division)->where('tool_code', $code)->first();
        return response()->json($data);
    }

    public function getDivisionByCode($code){
        $data = Division::where('division_code', $code)->first();
        return response()->json($data);
    }

    public function getInspectorByCode($code){
        $data = User::where('level', 3)->where('kode', $code)->first();
        return response()->json($data);
    }

    public function submitReport(Request $request){


        $qrcode = $request->qr_code;
        $balanceStock = 0;

        // $data = Report::where('qr_code', $qrcode)->get()->last();

        if(Report::where('qr_code', $request->qr_code)->where('oas_code', $request->oas_id)->get()->count() > 0){
            $lastData = Report::where('qr_code', $request->qr_code)->get()->last();
            if($request->tipe_in_out == 1){
                $balanceStock = $lastData->quantity_code + $request->quantity;
            }else{
                $balanceStock = $lastData->quantity_code - $request->quantity;
            }
        }else{
            if($request->tipe_in_out == 1){
                $balanceStock += $request->quantity;
            }
        }
        if(MinStock::where(['qr_code' => $request->qr_code, 'oas' => $request->oas_id, 'type' => $request->tipe_tool])->get()->count() <= 0){
            $min_stock = new MinStock();
            $min_stock->qr_code = $request->qr_code;
            $min_stock->oas = $request->oas_id;
            $min_stock->type = $request->tipe_tool;
            $min_stock->min_stock = 0;
            $min_stock->save();
            
            $min_stock_id = $min_stock->id;
        }else{
            $min_stock_id = MinStock::where(['qr_code' => $request->qr_code, 'oas' => $request->oas_id, 'type' => $request->tipe_tool])->first()->id;
        }
       

        $newdate = date('m-Y', strtotime($request->date_code));
        // $data = $request->all();
        $data = new Report();
        $data->tool_code = $request->tool_id;
        $data->sercom_code = $request->sercom_id;
        $data->zona_code = $request->zona_id;
        $data->oas_code = $request->oas_id;
        $data->quantity_code = $balanceStock;
        $data->jumlah_input = $request->quantity;
        $data->division_code = $request->division_id;
        $data->inspector_code = $request->inspector_id;
        $data->batch_number = $request->batch_number;
        $data->qr_code = $request->qr_code;
        $data->inspector_name = $request->inspector_name;
        $data->tipe_tool = $request->tipe_tool;
        $data->tipe_in_out = $request->tipe_in_out;
        $data->min_stock_id = $min_stock_id;
        $data->status = 1;
        $data->date_code = $newdate;
        $data->save();

        return response()->json($data);

    }

}
