@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-gift"></em>
                Bagian Alat / Detail
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Nama Bagian Alat</th>
                    <td> {{$part->part_tool}} </td>
                </tr>
                <tr>
                    <th>Kode</th>
                    <td> {{$part->part_code}} </td>
                </tr>
                <tr>
                    <td> <a href="/part-tool" class="btn btn-sm btn-danger">Kembali</a> </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection