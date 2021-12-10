@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Sercom</h6>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ url('sercom/create') }}" class="btn btn-sm btn-neutral">Tambah Data</a>
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
                            <h5 class="h3 mb-0">Sercom</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table datatable-init" >
                            <thead>
                                <tr>
                                    <th>Nama Sercom</th>
                                    <th>Kode</th>
                                    <th>PIC Sercom</th>
                                    <th>Email Sercom</th>
                                    <th>Status Sercom</th>
                                    <th>Sercom Logo</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>
                                        {{ $item->sercom_name }}
                                    </td>
                                    <td> {{ $item->sercom_code }} </td>
                                    <td> {{ $item->sercom_pic }} </td>
                                    <td> {{ $item->sercom_email }} </td>
                                    <td>
                                        @if ($item->sercom_status)
                                            Aktif
                                        @else
                                            Tidak Akif
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->sercom_logo == '')
                                            <img src="{{ asset('images/no-image.png') }}" alt="" width="80">
                                        @else
                                            <img src="{{ asset('uploads/' . $item->sercom_logo) }}" alt="" width="80">
                                        @endif
                                    </td>
                                    <td class="text-center" >
                                        <a href="{{ url('sercom/' . $item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="ni ni-collection"></i>
                                        </a>
                                        <a href="{{ url('sercom/' . $item->id . '/edit') }}" class="btn btn-success btn-sm">
                                            <i class="ni ni-ruler-pencil"></i>
                                        </a>
                                        <a href="{{ url('sercom/' . $item->id . '/delete') }}" class="btn btn-danger btn-alert-delete btn-sm">
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