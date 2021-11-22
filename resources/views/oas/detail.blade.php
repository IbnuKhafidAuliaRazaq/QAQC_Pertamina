@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-info"></em>
                Sercom / Detil
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
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
                    <td><span class="badge badge-secondary">{{ $oas->oas_status == 1 ? 'Aktif' : 'Tidak aktif' }}</span></td>
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
                    <td> <a href="{{ url('oas') }}" class="btn btn-sm btn-danger">Kembali</a> </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection