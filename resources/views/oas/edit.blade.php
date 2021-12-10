@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">OAS / Ubah</h6>
                </div>
                {{-- <div class="col-lg-6 col-5 text-right">
                    <a href="{{ url('oas/create') }}" class="btn btn-sm btn-neutral">Tambah Data</a>
                </div> --}}
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
                    <form action="{{ url('oas/' . $oas->id . '/update')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="oas_title">Judul OAS<span class="text-danger" >*</span></label>
                            <input type="text" name="oas_title" value="{{ $oas->oas_title }}" id="oas_title" class="form-control form-control-alternative">
                            @error('oas_title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="oas_code">Kode OAS<span class="text-danger" >*</span></label>
                            <input type="number" name="oas_code" value="{{ $oas->oas_code }}" id="oas_code" class="form-control form-control-alternative">
                            @error('oas_code')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="oas_description">Deskripsi OAS</label>
                            <textarea name="oas_description" id="oas_description" cols="10" rows="5" class="form-control form-control-alternative">
                            {{ $oas->oas_description }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Status OAS<span class="text-danger" >*</span></label>
                            <div class="custom-control custom-control-sm custom-radio">
                                <input type="radio" id="aktif" value="1" name="status" {{ $oas->oas_status == 1 ? 'checked' : '' }} class="custom-control-input">
                                <label class="custom-control-label" for="aktif">Aktif</label>
                            </div>
                            <div class="custom-control custom-control-sm custom-radio">
                                <input type="radio" id="tidak_aktif" value="0" {{ $oas->oas_status == 0 ? 'checked' : '' }} name="status" class="custom-control-input">
                                <label class="custom-control-label" for="tidak_aktif">Tidak Aktif</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="oas_start">Tanggal Mulai<span class="text-danger" >*</span></label>
                            <input type="text" value="{{ $oas->oas_start }}" name="oas_start" id="oas_start" class="form-control form-control-alternative">
                            @error('oas_start')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="oas_start">Tanggal Akhir<span class="text-danger" >*</span></label>
                            <input type="text" value="{{ $oas->oas_end }}" name="oas_end" id="oas_end" class="form-control form-control-sm" >
                            @error('oas_end')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="oas_pic">PIC OAS</label>
                            <input type="text" value="{{ $oas->oas_pic }}" name="oas_pic" id="oas_pic" class="form-control form-control-alternative">
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <a href="{{ url('oas') }}" class="btn btn-danger">Kembali</a>
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