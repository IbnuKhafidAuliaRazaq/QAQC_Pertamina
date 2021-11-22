@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-unarchive"></em>
                Barang Keluar
            </h3>
        </div>
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li>
                            <a href="/tool/create" class="btn btn-white btn-dim btn-outline-primary">
                                <em class="icon ni ni-download"></em><span>Ekspor Data</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <table class="table datatable-init table-responsive" >
            <thead>
                <tr>
                    <th></th>
                    <th>Tanggal</th>
                    <th>Kode OAS</th>
                    <th>Sercom</th>
                    <th>Nama Barang</th>
                    <th>Divisi</th>
                    <th>QR Code</th>
                    <th>Jumlah Barang Masuk</th>
                    <th>Kode Aset</th>
                    <th>Inspektor</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="custom-control custom-control-sm custom-checkbox">
                            <input type="checkbox" name="" id="customCheck1" class="custom-control-input">
                            <label class="custom-control-label" for="customCheck1"></label>
                        </div>
                    </td>
                    <td>2021-06-15</td>
                    <td>4650013617</td>
                    <td>Baker</td>
                    <td>
                        Cement Class G
                    </td>
                    <td> Cementing Material </td>
                    <td> 03022461220062110024060206210000 </td>
                    <td> 24 </td>
                    <td> 03 </td>
                    <td> Thomas Edony </td>
                    <td class="text-center" >
                        <a href="/equipment_out/show" class="btn btn-primary btn-xs">
                            <em class="icon ni ni-eye"></em>
                        </a>
                        <a href="#" class="btn btn-danger btn-xs">
                            <em class="icon ni ni-trash"></em>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection