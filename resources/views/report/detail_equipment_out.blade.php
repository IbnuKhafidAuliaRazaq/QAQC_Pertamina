@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-unarchive"></em>
                Barang Keluar / Detil
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
                    <td>Baker </td>
                </tr>
                <tr>
                    <th>Nama Barang</th>
                    <td> </td>
                </tr>
                <tr>
                    <th>QR Code</th>
                    <td>03022461220062110024060206210000</td>
                </tr>
                <tr>
                    <th>Jumlah Barang</th>
                    <td> 1 </td>
                </tr>
                <tr>
                    <th>Kode Aset</th>
                    <td>03</td>
                </tr>
                <tr>
                    <td> <a href="/equipment_out" class="btn btn-sm btn-danger">Kembali</a> </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection