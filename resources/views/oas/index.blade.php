@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">OAS</h6>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ url('oas/create') }}" class="btn btn-sm btn-neutral">Tambah Data</a>
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
                            <h5 class="h3 mb-0">OAS</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table datatable-init" >
                            <thead>
                                <tr>
                                    <th>Judul OAS</th>
                                    <th>Kode OAS</th>
                                    <th>Mulai OAS</th>
                                    <th>Akhir OAS</th>
                                    <th>Deskripsi</th>
                                    <th>Status Sercom</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>
                                        {{ $item->oas_title }}
                                    </td>
                                    <td> {{ $item->oas_code }} </td>
                                    <td> {{ $item->oas_start }} </td>
                                    <td> {{ $item->oas_end }} </td>
                                    <td> {{ $item->oas_description }} </td>
                                    <td>Aktif</td>
                                    <td class="text-center" >
                                        <a href="{{url('oas/' . $item->id)}}" class="btn btn-primary btn-sm">
                                            <i class="ni ni-collection"></i>
                                        </a>
                                        <a href="{{ url('oas/' . $item->id) . '/edit' }}" class="btn btn-success btn-sm">
                                            <i class="ni ni-ruler-pencil"></i>
                                        </a>
                                        <a href="{{ url('oas/' . $item->id . '/delete')}}" class="btn btn-alert-delete btn-danger btn-sm">
                                            <i class="ni ni-fat-delete"></i>
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
</div>
@endsection