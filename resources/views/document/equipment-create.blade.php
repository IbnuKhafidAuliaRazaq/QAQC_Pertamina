@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-package"></em>
                Document Equipment / Tambah
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <form action="{{ url('user') }}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="oas_id">Pilih OAS<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <select  name="oas_id" id="oas_id" class="form-select" data-ui="sm" data-search="on">
                        @foreach ($oas as $item => $value)
                            <option value="{{$value->id}}">{{ $value->oas_code }}</option>
                        @endforeach
                    </select>
                    @error('oas_id')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="oas_id">Pilih Divisi<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <select  name="division_id" id="division_id" class="form-select" data-ui="sm" data-search="on">
                        @foreach ($division as $item => $value)
                            <option value="{{$value->id}}">{{ $value->division_name }}</option>
                        @endforeach
                    </select>
                    @error('oas_id')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="fullname">Service Report</label>
                </div>
                <div class="col-9">
                    <div class="form-control-wrap">
                        <div class="custom-file">
                            <input type="file" multiple class="custom-file-input" id="service_report" name="service_report">
                            <label class="custom-file-label" for="service_report">Choose file</label>
                        </div>
                        @error('service_report')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="fullname">Certificate of Compliance</label>
                </div>
                <div class="col-9">
                    <div class="form-control-wrap">
                        <div class="custom-file">
                            <input type="file" multiple class="custom-file-input" id="certificate_compliance" name="certificate_compliance">
                            <label class="custom-file-label" for="certificate_compliance">Choose file</label>
                        </div>
                        @error('certificate_compliance')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="fullname">Inspection Report</label>
                </div>
                <div class="col-9">
                    <div class="form-control-wrap">
                        <div class="custom-file">
                            <input type="file" multiple class="custom-file-input" id="inspection_report" name="inspection_report">
                            <label class="custom-file-label" for="inspection_report">Choose file</label>
                        </div>
                        @error('inspection_report')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="fullname">Mill Certificate</label>
                </div>
                <div class="col-9">
                    <div class="form-control-wrap">
                        <div class="custom-file">
                            <input type="file" multiple class="custom-file-input" id="mill_certificate" name="mill_certificate">
                            <label class="custom-file-label" for="mill_certificate">Choose file</label>
                        </div>
                        @error('mill_certificate')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3"></div>
                <div class="col-9">
                    <a href="{{ url('document_equipment') }}" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection