@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-star"></em>
                Sercom
            </h3>
        </div>
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li>
                            <a href="{{ url('sercom/create') }}" class="btn btn-white btn-dim btn-outline-primary">
                                <em class="icon ni ni-plus"></em><span>Tambah Data</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <table class="table datatable-init" >
            <thead>
                <tr>
                    <th></th>
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
                        <div class="custom-control custom-control-sm custom-checkbox">
                            <input type="checkbox" name="" id="customCheck1" class="custom-control-input">
                            <label class="custom-control-label" for="customCheck1"></label>
                        </div>
                    </td>
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
                        <a href="{{ url('sercom/' . $item->id) }}" class="btn btn-primary btn-xs">
                            <em class="icon ni ni-eye"></em>
                        </a>
                        <a href="{{ url('sercom/' . $item->id . '/edit') }}" class="btn btn-success btn-xs">
                            <em class="icon ni ni-edit"></em>
                        </a>
                        <a href="{{ url('sercom/' . $item->id . '/delete') }}" class="btn btn-danger btn-alert-delete btn-xs">
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