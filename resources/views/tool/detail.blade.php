@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-gift"></em>
                {{ $tool->division->division_name }} / Detail
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Nama {{ $tool->division->division_name }}</th>
                    <td> {{$tool->tool_name}} </td>
                </tr>
                <tr>
                    <th>Kode</th>
                    <td> {{$tool->tool_code}} </td>
                </tr>
                <tr>
                    <td> <a href="{{ url('divisi_tool/'.$tool->division->id) }}" class="btn btn-sm btn-danger">Kembali</a> </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection