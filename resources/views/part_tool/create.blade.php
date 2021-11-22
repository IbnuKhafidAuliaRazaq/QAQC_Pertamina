@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-gift"></em>
                Bagian Alat / Tambah
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <form action="/part-tool" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="part_tool">Nama Bagian Alat<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="text" name="part_tool" id="part_tool" class="form-control form-control-sm">
                    @error('part_tool')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="part_code">Kode<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="number" name="part_code" id="part_code" class="form-control form-control-sm">
                    @error('part_code')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3"></div>
                <div class="col-9">
                    <a href="/part-tool" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" name="tambah_lagi" class="btn btn-success btn-sm">Simpan & Tambah Lagi</button>
                    <button type="submit" name="simpan" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection