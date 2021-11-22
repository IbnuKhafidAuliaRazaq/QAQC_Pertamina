@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-package"></em>
                Regional
            </h3>
        </div>
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li>
                            <a href="{{ url('regional/create') }}" class="btn btn-white btn-dim btn-outline-primary">
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
                    <th>Nama Regional</th>
                    <th>Regional Alias</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>
                        <div class="custom-control custom-control-sm custom-checkbox">
                            <input type="checkbox" name="regional-{{$item->id}}" id="regional-{{$item->id}}" class="custom-control-input">
                            <label class="custom-control-label" for="regional-{{$item->id}}"></label>
                        </div>
                    </td>
                    <td>
                        {{ $item->regional_name }}
                    </td>
                    <td>
                        {{ $item->regional_alias }}
                    </td>
                    <td class="text-center" >
                        <a href="{{url('regional/' . $item->id)}}" class="btn btn-primary btn-xs">
                            <em class="icon ni ni-eye"></em>
                        </a>
                        <a href="{{url('regional/' . $item->id . '/edit')}}" class="btn btn-success btn-xs">
                            <em class="icon ni ni-edit"></em>
                        </a>
                        <a href="{{url('regional/' . $item->id . '/delete')}}" class="btn btn-alert-delete btn-danger btn-xs">
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