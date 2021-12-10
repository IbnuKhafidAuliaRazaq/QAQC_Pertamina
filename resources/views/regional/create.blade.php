@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Regional / Tambah</h6>
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
                    <form action="{{ url('regional') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="regional_name">Nama Regional<span class="text-danger" >*</span></label>
                            <input type="text" name="regional_name" id="regional_name" class="form-control form-control-alternative">
                            @error('regional_name')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="regional_alias">Regional Alias<span class="text-danger" >*</span></label>
                            <input type="text" name="regional_alias" id="regional_alias" class="form-control form-control-alternative">
                            @error('regional_alias')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-9">
                                <a href="{{ url('regional') }}" class="btn btn-danger">Kembali</a>
                                <button type="submit" name="tambah_lagi" class="btn btn-success">Simpan & Tambah Lagi</button>
                                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection