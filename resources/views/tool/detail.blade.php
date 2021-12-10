@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">{{ $tool->division->division_name }} / Detail</h6>
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
                            <h5 class="h3 mb-0">Form</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
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
                                <td> <a href="{{ url('divisi_tool/'.$tool->division->id) }}" class="btn btn-danger">Kembali</a> </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection