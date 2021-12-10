@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">OAS / Detail</h6>
                </div>
                {{-- <div class="col-lg-6 col-5 text-right">
                    <a href="{{ url('oas/create') }}" class="btn btn-sm btn-neutral">Tambah Data</a>
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
                            <h5 class="h3 mb-0">Data</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Judul OAS</th>
                                <td>{{ $oas->oas_title }}</td>
                            </tr>
                            <tr>
                                <th>Kode OAS</th>
                                <td>{{ $oas->oas_code }}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi OAS</th>
                                <td>{{ $oas->oas_description }}</td>
                            </tr>
                            <tr>
                                <th>Status OAS</th>
                                <td><span class="badge badge-warning">{{ $oas->oas_status == 1 ? 'Aktif' : 'Tidak aktif' }}</span></td>
                            </tr>
                            <tr>
                                <th>Tanggal Mulai</th>
                                <td>{{ $oas->oas_start }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Akhir</th>
                                <td>{{ $oas->oas_end }}</td>
                            </tr>
                            <tr>
                                <th>PIC OAS</th>
                                <td>{{ $oas->oas_pic }}</td>
                            </tr>
                            <tr>
                                <td> <a href="{{ url('oas') }}" class="btn btn-danger">Kembali</a> </td>
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