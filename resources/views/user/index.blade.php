@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">User</h6>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ url('user/create') }}" class="btn btn-sm btn-neutral">Tambah Data</a>
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
                            <h5 class="h3 mb-0">Users</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
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
                                @foreach ($users as $user)
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
                                        <a href="{{ url('user/' . $user->id.'/detail') }}" class="btn btn-primary btn-sm">
                                            <i class="ni ni-collection"></i>
                                        </a>
                                        <a href="{{ url('user/' . $user->id . '/delete')  }}" class="btn btn-alert-delete btn-danger btn-sm">
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