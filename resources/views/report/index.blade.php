@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-package-fill"></em>
                {{ $title }}
            </h3>
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
@endsection