@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-package"></em>
                User / Tambah
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <form action="{{ url('user') }}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="username">Username<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input required type="text" name="username" id="username" class="form-control form-control-sm">
                    @error('email')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="fullname">Fullname<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input required type="text" name="fullname" id="fullname" class="form-control form-control-sm">
                    @error('fullname')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="email">Email<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input required type="email" name="email" id="email" class="form-control form-control-sm">
                    @error('email')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="position">Position<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input required type="text" name="position" id="position" class="form-control form-control-sm">
                    @error('position')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="password">Password<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input required type="password" name="password" id="password" class="form-control form-control-sm">
                    @error('password')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="level">Level<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <select type="text" onchange="kodeUser()" name="level" id="level" class="form-control form-control-sm">
                        <option value="1">User</option>
                        <option value="3">Verificator</option>
                    </select>
                    @error('level')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>

            <div class="form-group row" id="form-kode">
                
            </div>
            <div class="form-group row">
                <div class="col-3"></div>
                <div class="col-9">
                    <a href="{{ url('zone') }}" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function kodeUser(){
        let level = $('#level').val()
        let form = '<div class="col-3 d-flex justify-content-end"><label for="kode">Kode Inspector<span class="text-danger" >*</span></label></div><div class="col-9"><input type="number" name="kode" id="kode" class="form-control form-control-sm"></div>';
        if(level == 3){
            $('#form-kode').html(form);
        }else{
            $('#form-kode').empty();
        }
    }
</script>
@endsection