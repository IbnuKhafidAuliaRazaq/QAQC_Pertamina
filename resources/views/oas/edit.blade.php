@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-info"></em>
                OAS / Ubah
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <form action="{{ url('oas/' . $oas->id . '/update')}}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="oas_title">Judul OAS<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="text" name="oas_title" value="{{ $oas->oas_title }}" id="oas_title" class="form-control form-control-sm">
                    @error('oas_title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="oas_code">Kode OAS<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="number" name="oas_code" value="{{ $oas->oas_code }}" id="oas_code" class="form-control form-control-sm">
                    @error('oas_code')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="oas_description">Deskripsi OAS</label>
                </div>
                <div class="col-9">
                    <textarea name="oas_description" id="oas_description" cols="10" rows="5" class="form-control form-control-sm">
                        {{ $oas->oas_description }}
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="">Status OAS<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <div class="custom-control custom-control-sm custom-radio">
                        <input type="radio" id="aktif" value="1" name="status" {{ $oas->oas_status == 1 ? 'checked' : '' }} class="custom-control-input">
                        <label class="custom-control-label" for="aktif">Aktif</label>
                    </div>
                    <div class="custom-control custom-control-sm custom-radio">
                        <input type="radio" id="tidak_aktif" value="0" {{ $oas->oas_status == 0 ? 'checked' : '' }} name="status" class="custom-control-input">
                        <label class="custom-control-label" for="tidak_aktif">Tidak Aktif</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="oas_start">Tanggal Mulai<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <div class="form-control-wrap">
                        <div class="input-daterange date-picker-range input-group">
                            <input type="text" value="{{ $oas->oas_start }}" name="oas_start" id="oas_start" class="form-control">
                            <div class="input-group-addon">Ke</div>
                            <input type="text" value="{{ $oas->oas_end }}" name="oas_end" id="oas_end" class="form-control" >
                        </div>
                        @error('oas_start')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        @error('oas_end')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="oas_pic">PIC OAS</label>
                </div>
                <div class="col-9">
                    <input type="text" value="{{ $oas->oas_pic }}" name="oas_pic" id="oas_pic" class="form-control form-control-sm">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3"></div>
                <div class="col-9">
                    <a href="{{ url('oas') }}" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection