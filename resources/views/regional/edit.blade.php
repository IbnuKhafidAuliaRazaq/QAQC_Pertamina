@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-package"></em>
                Regional / Ubah
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <form action="{{ url('regional/' . $regional->id . '/update') }}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="regional_name">Nama Regional<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="text" name="regional_name" value="{{ $regional->regional_name }}" id="regional_name" class="form-control form-control-sm">
                    @error('regional_name')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="regional_alias">Regional Alias<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="text" name="regional_alias" value="{{ $regional->regional_alias }}" id="regional_alias" class="form-control form-control-sm">
                    @error('regional_alias')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3"></div>
                <div class="col-9">
                    <a href="{{ url('regional') }}" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection