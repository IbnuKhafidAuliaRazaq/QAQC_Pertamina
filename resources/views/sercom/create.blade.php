@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Sercom / Tambah</h6>
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
                    <form action="{{ url('sercom') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="sercom_name">Nama Sercom<span class="text-danger" >*</span></label>
                            <input type="text" name="sercom_name" id="sercom_name" class="form-control form-control-alternative">
                            @error('sercom_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sercom_code">Kode<span class="text-danger" >*</span></label>
                            <input type="number" name="sercom_code" id="sercom_code" class="form-control form-control-alternative">
                            @error('sercom_code')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sercom_pic">PIC</label>
                            <input type="text" name="sercom_pic" id="sercom_pic" class="form-control form-control-alternative">
                        </div>
                        <div class="form-group">
                            <label for="sercom_phone">Telepon</label>
                            <input type="number" name="sercom_phone" id="sercom_phone" class="form-control form-control-alternative">
                        </div>
                        <div class="form-group">
                            <label for="sercom_email">Email</label>
                            <input type="email" name="sercom_email" id="sercom_email" class="form-control form-control-alternative">
                        </div>
                        <div class="form-group">
                            <label for="sercom_address">Alamat</label>
                            <textarea name="sercom_address" id="sercom_address" cols="10" rows="5" class="form-control form-control-alternative"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="default-06">Logo Sercom</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" multiple class="custom-file-input" id="sercom_logo" name="sercom_logo">
                                    <label class="custom-file-label" for="sercom_logo">Choose file</label>
                                </div>
                                @error('sercom_logo')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Status<span class="text-danger" >*</span></label>
                            <div class="custom-control custom-control-sm custom-radio">
                                <input type="radio" id="aktif" name="status" checked value="1" class="custom-control-input">
                                <label class="custom-control-label" for="aktif">Aktif</label>
                            </div>
                            <div class="custom-control custom-control-sm custom-radio">
                                <input type="radio" id="tidak_aktif" name="status" class="custom-control-input">
                                <label class="custom-control-label" value="0" for="tidak_aktif">Tidak Aktif</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-9">
                                <a href="{{ url('sercom') }}" class="btn btn-danger">Kembali</a>
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