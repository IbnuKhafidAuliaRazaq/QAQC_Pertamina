@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-star"></em>
                Sercom / Tambah
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <form action="{{ url('sercom') }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="sercom_name">Nama Sercom<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="text" name="sercom_name" id="sercom_name" class="form-control form-control-sm">
                    @error('sercom_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="sercom_code">Kode<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="number" name="sercom_code" id="sercom_code" class="form-control form-control-sm">
                    @error('sercom_code')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="sercom_pic">PIC</label>
                </div>
                <div class="col-9">
                    <input type="text" name="sercom_pic" id="sercom_pic" class="form-control form-control-sm">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="sercom_phone">Telepon</label>
                </div>
                <div class="col-9">
                    <input type="number" name="sercom_phone" id="sercom_phone" class="form-control form-control-sm">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="sercom_email">Email</label>
                </div>
                <div class="col-9">
                    <input type="email" name="sercom_email" id="sercom_email" class="form-control form-control-sm">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="sercom_address">Alamat</label>
                </div>
                <div class="col-9">
                    <textarea name="sercom_address" id="sercom_address" cols="10" rows="5" class="form-control form-control-sm"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="default-06">Logo Sercom</label>
                </div>
                <div class="col-9">
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
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="">Status<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <div class="custom-control custom-control-sm custom-radio">
                        <input type="radio" id="aktif" name="status" checked value="1" class="custom-control-input">
                        <label class="custom-control-label" for="aktif">Aktif</label>
                    </div>
                    <div class="custom-control custom-control-sm custom-radio">
                        <input type="radio" id="tidak_aktif" name="status" class="custom-control-input">
                        <label class="custom-control-label" value="0" for="tidak_aktif">Tidak Aktif</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3"></div>
                <div class="col-9">
                    <a href="{{ url('sercom') }}" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" name="tambah_lagi" class="btn btn-success btn-sm">Simpan & Tambah Lagi</button>
                    <button type="submit" name="simpan" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection