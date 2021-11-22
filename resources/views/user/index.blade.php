@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-package"></em>
                User
            </h3>
        </div>
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li>
                            <a href="{{ url('user/create') }}" class="btn btn-white btn-dim btn-outline-primary">
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
                    <th>Nama Lengkap</th>
                    <th>Position</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->position }}</td>
                        <td>
                            @if($user->level == 1)
                                <div style="width:100px" class="badge center badge-secondary">User</div>
                            @elseif($user->level == 2)
                                <div style="width:100px" class="badge center badge-primary">Leader</div>
                            @elseif($user->level == 3)
                                <div style="width:100px" class="badge center badge-warning">Verificator</div>
                            @elseif($user->level == 4)
                                <div style="width:100px" class="badge center badge-danger">Manager</div>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('user/' . $user->id.'/detail') }}" class="btn btn-primary btn-xs">
                                <em class="icon ni ni-eye"></em>
                            </a>
                            <a href="{{ url('user/' . $user->id . '/delete')  }}" class="btn btn-alert-delete btn-danger btn-xs">
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