@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-package-fill"></em>
                {{ $division->division_name }} / Tambah
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <form action="{{ url('tool') }}" method="post">
            @csrf
            <input type="text" hidden name="division_id" id="" value="{{ $division->id }}">
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="tool_name">Nama {{ $division->division_name }}<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="text" name="tool_name" id="tool_name" class="form-control form-control-sm">
                    @error('tool_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="tool_code">Kode<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="number" name="tool_code" id="tool_code" class="form-control form-control-sm">
                    @error('tool_code')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="minimum_stock">Minimal Stok</label>
                </div>
                <div class="col-9">
                    <input type="number" name="minimum_stock" id="minimum_stock" class="form-control form-control-sm">
                    @error('minimum_stock')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3"></div>
                <div class="col-9">
                    <a href="{{ url('divisi_tool/' . $division->id) }}" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" name="tambah_lagi" class="btn btn-success btn-sm">Simpan & Tambah Lagi</button>
                    <button type="submit" name="simpan" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection