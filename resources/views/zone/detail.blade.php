@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Zona / Detail</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 mb-0">Data</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
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
                                <td> <a href="{{ url('zone') }}" class="btn btn-danger">Kembali</a> </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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