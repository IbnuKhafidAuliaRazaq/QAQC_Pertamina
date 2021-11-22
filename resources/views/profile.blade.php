@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-user-alt"></em>
                Profil
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <div class="form-group row">
            <div class="col-3 d-flex justify-content-end">
                <label for="user_name">Nama<span class="text-danger" >*</span></label>
            </div>
            <div class="col-9">
                <input type="number" name="user_name" id="user_name" class="form-control form-control-sm">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3 d-flex justify-content-end">
                <label for="user_code">Kode Inspector<span class="text-danger" >*</span></label>
            </div>
            <div class="col-9">
                <input type="text" name="user_code" id="user_code" class="form-control form-control-sm">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3 d-flex justify-content-end">
                <label for="email">Email<span class="text-danger" >*</span></label>
            </div>
            <div class="col-9">
                <input type="text" name="email" id="email" class="form-control form-control-sm">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3 d-flex justify-content-end">
                <label for="password">Password<span class="text-danger" >*</span></label>
            </div>
            <div class="col-9">
                <input type="password" name="password" id="password" class="form-control form-control-sm">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3 d-flex justify-content-end">
                <label for="password_confirmation">Password Konfirmasi<span class="text-danger" >*</span></label>
            </div>
            <div class="col-9">
                <input type="text" name="password_confirmation" id="password_confirmation" class="form-control form-control-sm">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3"></div>
            <div class="col-9">
                <a href="/" class="btn btn-sm btn-danger">Kembali</a>
                <button type="submit" name="simpan" class="btn btn-success btn-sm">Simpan</button>
            </div>
        </div>
    </div>
</div>
@endsection