@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">{{ $title }}</h6>
                </div>
                {{-- <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                </div> --}}
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
                            <h5 class="h3 mb-0">{{ $title }}</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table datatable-init table-responsive" >
                        <thead>
                            <tr>
                                <th></th>
                                <th>Tanggal</th>
                                <th>Kode OAS</th>
                                <th>Sercom</th>
                                <th>Nama Barang</th>
                                <th>Divisi</th>
                                <th>Batch Number</th>
                                <th>Jumlah Input</th>
                                <th>Kode Aset</th>
                                <th>Verificator</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>
                                    <div class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" name="" id="report-{{$item->id}}" class="custom-control-input">
                                        <label class="custom-control-label" for="report-{{$item->id}}"></label>
                                    </div>
                                </td>
                                <td> {{ $item->created_at }} </td>
                                <td> {{ $item->oas->oas_code }} </td>
                                <td> {{ $item->sercom->sercom_name }} </td>
                                <td>{{ $item->tool->tool_name }}</td>
                                <td> {{ $item->tool->division->division_name }} </td>
                                <td> {{ $item->batch_number }} </td>
                                <td> {{ $item->jumlah_input }} </td>
                                <td> {{ str_pad($item->zone->zona_name, 2, '0', STR_PAD_LEFT) }} </td>
                                <td> {{ $item->inspector_name }} </td>
                                <td class="text-center" >
                                    <a href="/summary/{{$item->id}}/delete" class="btn btn-danger btn-alert-delete btn-xs">
                                        <em class="icon ni ni-trash"></em>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection