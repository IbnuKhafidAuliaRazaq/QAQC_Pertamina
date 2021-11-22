@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-archive"></em>
                Barang Masuk / Detil
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Sercom</th>
                    <td> {{ $report->sercom->sercom_name }} </td>
                </tr>
                <tr>
                    <th>Nama Barang</th>
                    <td> {{ $report->tool->tool_name }} </td>
                </tr>
                <tr>
                    <th>QR Code</th>
                    <td> {{ $report->tool->tool_qr_code }} </td>
                </tr>
                <tr>
                    <th>Jumlah Barang</th>
                    <td> {{ $report->quantity }} </td>
                </tr>
                <tr>
                    <th>Kode Aset</th>
                    <td> {{ str_pad($report->zona_code, 2, '0', STR_PAD_LEFT) }} </td>
                </tr>
                <tr>
                    <td> <a href="/equipment_in" class="btn btn-sm btn-danger">Kembali</a> </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection