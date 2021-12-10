@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">User / Detail</h6>
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
                            <h5 class="h3 mb-0">Form</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Username</th>
                                <td>{{ $user->username }}</td>
                            </tr>
                            <tr>
                                <th>Fullname</th>
                                <td>{{ $user->fullname }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>Position</th>
                                <td>{{ $user->position }}</td>
                            </tr>
                            <tr>
                                <th>Level</th>
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
                            </tr>
                            <tr>
                                <td> <a href="{{ url('user') }}" class="btn btn-danger">Kembali</a> </td>
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