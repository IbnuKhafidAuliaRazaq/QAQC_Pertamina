@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-star"></em>
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
                    <th>Nama Sercom</th>
                    <td>{{ $data->sercom_name }}</td>
                </tr>
                <tr>
                    <th>Kode</th>
                    <td>{{ $data->sercom_code }}</td>
                </tr>
                <tr>
                    <th>PIC</th>
                    <td>{{ $data->sercom_pic }}</td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td>{{ $data->sercom_phone }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $data->sercom_email }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $data->sercom_address }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <span class="badge badge-secondary">
                            @if ($data->sercom_status == 1)
                                Aktif
                            @else
                                Tidak Aktif
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <td> <a href="{{ url('sercom') }}" class="btn btn-sm btn-danger">Kembali</a> </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection