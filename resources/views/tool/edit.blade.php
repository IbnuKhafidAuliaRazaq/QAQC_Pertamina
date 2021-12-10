@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Barang Ubah</h6>
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
                    <form action="{{ url('tool/' .  $tool->id . '/update') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="tool_name">Nama Barang<span class="text-danger" >*</span></label>
                            <input type="text" value="{{ $tool->tool_name }}" name="tool_name" id="tool_name" class="form-control form-control-alternative">
                        </div>
                        <div class="form-group">
                            <label for="tool_code">Kode<span class="text-danger" >*</span></label>
                            <input type="number" name="tool_code" id="tool_code" value="{{ $tool->tool_code }}" class="form-control form-control-alternative">
                            @error('tool_code')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="minimum_stock">Minimal Stok</label>
                            <input type="number" name="minimum_stock" value="{{ $tool->minimum_stock }}" id="minimum_stock" class="form-control form-control-alternative">
                            @error('minimum_stock')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-9">
                                <a href="{{ url('divisi_tool/'.$tool->division->id) }}" class="btn btn-danger">Kembali</a>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection