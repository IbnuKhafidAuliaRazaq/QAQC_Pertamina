@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-star"></em>
                Zona / Detil
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Kode</th>
                    <td>{{$zone->zona_code}}</td>
                </tr>
                <tr>
                    <th>Nama Zona</th>
                    <td>{{$zone->zona_name}}</td>
                </tr>
                <tr>
                    <th>Zona Alias</th>
                    <td>{{$zone->zona_alias}}</td>
                </tr>
                <tr>
                    <td> <a href="{{ url('zone') }}" class="btn btn-sm btn-danger">Kembali</a> </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection