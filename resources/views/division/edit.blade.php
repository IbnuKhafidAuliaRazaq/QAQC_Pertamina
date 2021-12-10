@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Divisi / Ubah</h6>
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
                    <form action="{{ url('division/' . $division->id . '/update')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="division_code">Kode<span class="text-danger" >*</span></label>
                            <input type="number" value="{{ $division->division_code }}" name="division_code" id="division_code" class="form-control form-control-alternative">
                            @error('division_code')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="division_name">Nama Divisi<span class="text-danger" >*</span></label>
                            <input type="text" name="division_name" value="{{ $division->division_name }}" id="division_name" class="form-control form-control-alternative">
                            @error('division_name')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        {{-- <div class="form-group row">
                            <div class="col-3 d-flex justify-content-end">
                                <label for="">Termasuk Bagian Alat</label>
                            </div>
                            <div class="col-9">
                                <div class="custom-control custom-control-sm custom-radio">
                                    <input type="radio" id="aktif" name="division_part_tool" {{ $division->division_part_tool == 1 ? 'checked' : '' }} value="1" class="custom-control-input">
                                    <label class="custom-control-label" for="aktif">Iya</label>
                                </div>
                                <div class="custom-control custom-control-sm custom-radio">
                                    <input type="radio" id="tidak_aktif" name="division_part_tool" {{ $division->division_part_tool != 1 ? 'checked' : '' }} class="custom-control-input">
                                    <label class="custom-control-label" value="0" for="tidak_aktif">Tidak</label>
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <div class="col-12">
                                <a href="{{ url('division') }}" class="btn btn-danger">Kembali</a>
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