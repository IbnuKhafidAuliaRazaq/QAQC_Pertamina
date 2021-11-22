@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-package"></em>
                Divisi / Tambah
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <form action="{{ url('division') }}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="division_code">Kode<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="number" name="division_code" id="division_code" class="form-control form-control-sm">
                    @error('division_code')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="division_name">Nama Divisi<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="text" name="division_name" id="division_name" class="form-control form-control-sm">
                    @error('division_name')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            {{-- <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="">Termasuk Bagian Alat</label>
                </div>
                <div class="col-9">
                    <div class="custom-control custom-control-sm custom-radio">
                        <input type="radio" id="aktif" name="division_part_tool" value="1" class="custom-control-input">
                        <label class="custom-control-label" for="aktif">Iya</label>
                    </div>
                    <div class="custom-control custom-control-sm custom-radio">
                        <input type="radio" id="tidak_aktif" checked name="division_part_tool" class="custom-control-input">
                        <label class="custom-control-label" value="0" for="tidak_aktif">Tidak</label>
                    </div>
                </div>
            </div> --}}
            <div class="form-group row">
                <div class="col-3"></div>
                <div class="col-9">
                    <a href="{{ url('division') }}" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" name="tambah_lagi" class="btn btn-success btn-sm">Simpan & Tambah Lagi</button>
                    <button type="submit" name="simpan" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection