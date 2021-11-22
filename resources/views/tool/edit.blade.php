@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-gift"></em>
                Barang / Ubah
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <form action="{{ url('tool/' .  $tool->id . '/update') }}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="tool_name">Nama Barang<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="text" value="{{ $tool->tool_name }}" name="tool_name" id="tool_name" class="form-control form-control-sm">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="tool_code">Kode<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="number" name="tool_code" id="tool_code" value="{{ $tool->tool_code }}" class="form-control form-control-sm">
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
                    <input type="number" name="minimum_stock" value="{{ $tool->minimum_stock }}" id="minimum_stock" class="form-control form-control-sm">
                    @error('minimum_stock')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3"></div>
                <div class="col-9">
                    <a href="{{ url('divisi_tool/'.$tool->division->id) }}" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection