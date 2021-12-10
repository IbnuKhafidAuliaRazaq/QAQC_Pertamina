@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">OAS / Tambah</h6>
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
                    <form action="{{ url('oas') }}" method="post">
                        @csrf
                        <div class="form-group ">
                            <label for="oas_title">Judul OAS<span class="text-danger" >*</span></label>
                            <input type="text" name="oas_title" id="oas_title" class="form-control form-control-alternative" placeholder="Judul Oas">
                            @error('oas_title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="oas_code">Kode OAS<span class="text-danger" >*</span></label>
                            <input type="number" name="oas_code" id="oas_code" class="form-control form-control-alternative" placeholder="Kode Oas">
                            @error('oas_code')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="oas_description">Deskripsi OAS</label>
                            <textarea name="oas_description" id="oas_description" cols="10" rows="5" class="form-control form-control-alternative" placeholder="Deskripsi Oas"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Status OAS</label>
                            <div class="custom-control custom-control-sm custom-radio">
                                <input type="radio" id="aktif" name="status" value="1" checked class="custom-control-input">
                                <label class="custom-control-label" for="aktif">Aktif</label>
                            </div>
                            <div class="custom-control custom-control-sm custom-radio">
                                <input type="radio" id="tidak_aktif" name="status" value="0" class="custom-control-input">
                                <label class="custom-control-label" for="tidak_aktif">Tidak Aktif</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="oas_start">Tanggal Mulai<span class="text-danger" >*</span></label>
                            <input type="date" name="oas_start" id="oas_start" class="form-control form-control-alternative" value="{{ date('Y-m-d') }}">
                            @error('oas_start')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="oas_end">Tanggal Akhir<span class="text-danger" >*</span></label>
                            <input type="date" name="oas_end" id="oas_end" class="form-control form-control-alternative" value="{{ date('Y-m-d') }}" >
                            @error('oas_end')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="oas_pic">PIC OAS</label>
                            <input type="text" name="oas_pic" id="oas_pic" class="form-control form-control-alternative" placeholder="PIC Oas">
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <a href="{{ url('oas') }}" class="btn btn-danger">Kembali</a>
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