<?php

namespace App\Exports;

use App\Report;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class SummaryExport implements FromArray, WithMapping, WithHeadings, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array():array
    {
        // $distinct = Report::query()->select(['qr_code', 'oas_code', 'tipe_tool'])->distinct();
        // $data = Report::query(); 
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
        return json_decode(json_encode($distinct), true);
    }

    public function columnWidths():array
    {
        return [
            'B' => 30,
            'C' => 30,
            'D' => 25
        ];
    }

    public function headings():array
    {
        return [
            '#',
            'Kode OAS',
            'Sercom',
            'Nama Barang',
            'Produk Masuk',
            'Produk Keluar',
            'Stok',
            'Minimum Stok',
            'Remarks'
        ];
    }

    public function map($row):array
    {
        return [
            '#',
            $row['oas_code'],
            $row['sercom_name'],
            $row['tool_name'],
            $row['product_in'],
            $row['product_out'],
            $row['quantity_code'],
            $row['min_stock'],
            $row['quantity_code'] <= $row['minimum_stock'] ? 'TOP UP' : 'OK',
        ];
    }
}
