@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-star"></em>
                User / Detil
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
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
                    <td> <a href="{{ url('user') }}" class="btn btn-sm btn-danger">Kembali</a> </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection