<?php

namespace App\Http\Controllers;

use App\Division;
use App\OAS;
use App\Report;
use App\Sercom;
use App\Tool;
use App\User;
use App\MinStock;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\SummaryExport;
use Excel;

class ReportController extends Controller
{
    public function index($type){
        if($type == 'equipment_in'){
            $title = 'Equipment In';
            $data = Report::where(['tipe_tool' => 1, 'tipe_in_out' => 1])->get();
        }elseif($type == 'equipment_out'){
            $title = 'Equipment Out';
            $data = Report::where(['tipe_tool' => 1, 'tipe_in_out' => 2])->get();
        }elseif($type == 'chemical_in'){
            $title = 'Chemical In';
            $data = Report::where(['tipe_tool' => 2, 'tipe_in_out' => 1])->get();
        }elseif($type == 'chemical_out'){
            $title = 'Chemical Out';
            $data = Report::where(['tipe_tool' => 2, 'tipe_in_out' => 2])->get();
        }else{
            abort(403);
        }
        return view('report.index', compact('data', 'title'));
    }

    public function summary(){
        
        $data = Report::orderBy('id', 'DESC')->get();
        $masuk = Report::where('tipe_in_out', 1)->sum('jumlah_input');
        $keluar = Report::where('tipe_in_out', 2)->sum('jumlah_input');
        $distinct = DB::table('tool_report')->select(['qr_code', 'oas_code', 'tipe_tool'])->distinct()->get();
        $index = 0;
        foreach ($distinct as $dst) {
            $product_in = Report::where('qr_code', $dst->qr_code)->where('oas_code', $dst->oas_code)->where('tipe_in_out', 1)->sum('jumlah_input');
            $product_out = Report::where('qr_code', $dst->qr_code)->where('oas_code', $dst->oas_code)->where('tipe_in_out', 2)->sum('jumlah_input');
            $summary = Report::orderBy('created_at', 'desc')->where(['qr_code' => $dst->qr_code, 'oas_code' => $dst->oas_code, 'tipe_tool' => $dst->tipe_tool])->first();
            // dd($summary->tool->division);
            $distinct[$index]->oas_code = $summary->oas->oas_code;
            $distinct[$index]->sercom_name = $summary->sercom->sercom_name;
            $distinct[$index]->tool_name = $summary->tool->tool_name;
            $distinct[$index]->division_name = $summary->tool->division->division_name;
            $distinct[$index]->product_in = $product_in;
            $distinct[$index]->product_out = $product_out;
            $distinct[$index]->qr_code = $summary->qr_code;
            $distinct[$index]->quantity_code = $summary->quantity_code;
            $distinct[$index]->minimum_stock = $summary->tool->minimum_stock;
            $distinct[$index]->tipe_in_out = $summary->tipe_in_out;
            $distinct[$index]->tipe_tool = $summary->tipe_tool;
            $distinct[$index]->zona_name = $summary->zone->zona_name;
            $distinct[$index]->inspector_name = $summary->inspector_name;
            $distinct[$index]->min_stock = $summary->minStock->min_stock;
            $distinct[$index]->min_stock_id = $summary->min_stock_id;
            $index++;
            // dd($summary);
        }
        // $distinct = useReportSummary::getData();
        // dd($distinct);
        // return response()->json($distinct);
        $title = 'Summary ALL';
        return view('report.summary', ['title' => $title, 'distinct_data' => $distinct, 'keluar' => $keluar, 'masuk' => $masuk]);
    }
    public function destroy($id){
        $report = Report::find($id);
        $report->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }

    public function exportExcel(){
        // return (new SummaryExport)->download('summary-' . time() . '.xlsx');
        return Excel::download(new SummaryExport, 'summary.xlsx');
    }

    public function exportPdf(){
        $masuk = Report::where('tipe_in_out', 1)->sum('jumlah_input');
        $keluar = Report::where('tipe_in_out', 2)->sum('jumlah_input');
        $distinct = DB::table('tool_report')->select(['qr_code', 'oas_code', 'tipe_tool'])->distinct()->get();
        $index = 0;
        foreach ($distinct as $dst) {
            $product_in = Report::where('qr_code', $dst->qr_code)->where('oas_code', $dst->oas_code)->where('tipe_in_out', 1)->sum('jumlah_input');
            $product_out = Report::where('qr_code', $dst->qr_code)->where('oas_code', $dst->oas_code)->where('tipe_in_out', 2)->sum('jumlah_input');
            $summary = Report::orderBy('created_at', 'desc')->where(['qr_code' => $dst->qr_code, 'oas_code' => $dst->oas_code, 'tipe_tool' => $dst->tipe_tool])->first();
            $distinct[$index]->oas_code = $summary->oas->oas_code;
            $distinct[$index]->sercom_name = $summary->sercom->sercom_name;
            $distinct[$index]->tool_name = $summary->tool->tool_name;
            $distinct[$index]->division_name = $summary->tool->division->division_name;
            $distinct[$index]->product_in = $product_in;
            $distinct[$index]->product_out = $product_out;
            $distinct[$index]->qr_code = $summary->qr_code;
            $distinct[$index]->quantity_code = $summary->quantity_code;
            $distinct[$index]->minimum_stock = $summary->tool->minimum_stock;
            $distinct[$index]->tipe_in_out = $summary->tipe_in_out;
            $distinct[$index]->tipe_tool = $summary->tipe_tool;
            $distinct[$index]->zona_name = $summary->zone->zona_name;
            $distinct[$index]->inspector_name = $summary->inspector_name;
            $distinct[$index]->min_stock = $summary->minStock->min_stock;
            $distinct[$index]->min_stock_id = $summary->min_stock_id;
            $index++;
            // dd($summary);
        }
        return view('report.print-pdf-view', ['distinct_data' => $distinct]);
    }









    // //
    // public function equipmentIn()
    // {
    //     $reportIn = Report::all();
    //     return view('report.equipment_in', ['reportIn' => $reportIn]);
    // }
    // public function equipmentInShow(Report $report)
    // {
    //     return view('report.detail_equipment_in', ['report' => $report]);
    // }
    // public function toolInView()
    // {
    //     $oas = OAS::all();
    //     $division = Division::where('division_status', 1)->get();
    //     $sercom = Sercom::all();
    //     return view('report.equipment_in_add', ['oas' => $oas, 'division' => $division, 'sercom' => $sercom]);
    // }
    // public function storeIn(Request $request)
    // {
    //     $request->validate([
    //         'oas_code' => 'required',
    //         'division_id' => 'required',
    //         'tool_id' => 'required',
    //         'quantity' => 'required'
    //     ]);

    //     $tz = 'Asia/Jakarta';
    //     $dt = new DateTime('now', new DateTimeZone($tz));

    //     $report = new Report();
    //     $report->tool_id = $request->tool_id;
    //     $report->sercom_id = $request->sercom_id;
    //     $report->zona_code = $request->zona_code;
    //     $report->oas_code = $request->oas_code;
    //     $report->inspector_name = $request->inspector_name;
    //     $report->quantity = $request->quantity;
    //     $report->status = 'in';
    //     $report->date = $dt->format('Y-m-d H:i:s');
    //     $report->save();

    //     $toolUpdate = Tool::find($request->tool_id);
    //     $stock = $toolUpdate->tool_stock;
    //     $stock = $stock + $request->quantity;
    //     $toolUpdate->tool_stock = $stock;
    //     $toolUpdate->save();

    //     return redirect('/equipment_in')->with('success', 'Berhasil');
    // }
    // public function equipmentInDestroy(Report $report)
    // {
    //     $report->delete();
    //     return redirect('/equipment_in')->with('success', 'Berhasil');
    // }

    // // API
    // public function getBarangByDivision($division)
    // {
    //     $tools = Tool::where('division_id', $division)->get();
    //     return response()->json($tools);
    // }
    // public function getInspectorById($inspector)
    // {
    //     $inspector = User::find($inspector);
    //     return response()->json($inspector);
    // }

    public function updateMinStock(){
        $min_stock = MinStock::find(Request('id'));
        $min_stock->min_stock = Request('min_stock');
        $min_stock->save();
        
        return redirect()->back()->with('success', 'Berhasil Mengubah Minimal Stock!');
    }
}
