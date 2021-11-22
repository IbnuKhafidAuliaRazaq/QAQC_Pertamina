@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-package"></em>
                Zona / Tambah
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <form action="{{ url('zone') }}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="zone_code">Kode<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="number" name="zone_code" id="zone_code" class="form-control form-control-sm">
                    @error('zone_code')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="zone_name">Nama Zona<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="text" name="zone_name" id="zone_name" class="form-control form-control-sm">
                    @error('zone_name')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="zone_alias">Zona Alias<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="text" name="zone_alias" id="zone_alias" class="form-control form-control-sm">
                    @error('zone_alias')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3"></div>
                <div class="col-9">
                    <a href="{{ url('zone') }}" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" name="tambah_lagi" class="btn btn-success btn-sm">Simpan & Tambah Lagi</button>
                    <button type="submit" name="simpan" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection