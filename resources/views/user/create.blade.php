@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">User / Tambah</h6>
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
                    <form action="{{ url('user') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username<span class="text-danger" >*</span></label>
                            <input required type="text" name="username" id="username" class="form-control form-control-alternative">
                            @error('email')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="fullname">Fullname<span class="text-danger" >*</span></label>
                            <input required type="text" name="fullname" id="fullname" class="form-control form-control-alternative">
                            @error('fullname')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email<span class="text-danger" >*</span></label>
                            <input required type="email" name="email" id="email" class="form-control form-control-alternative">
                            @error('email')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="position">Position<span class="text-danger" >*</span></label>
                            <input required type="text" name="position" id="position" class="form-control form-control-alternative">
                            @error('position')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Password<span class="text-danger" >*</span></label>
                            <input required type="password" name="password" id="password" class="form-control form-control-alternative">
                            @error('password')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="level">Level<span class="text-danger" >*</span></label>
                            <select type="text" onchange="kodeUser()" name="level" id="level" class="form-control form-control-alternative">
                                <option value="1">User</option>
                                <option value="3">Verificator</option>
                            </select>
                            @error('level')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
            
                        <div class="form-group row" id="form-kode">
                            
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <a href="{{ url('user') }}" class="btn btn-danger">Kembali</a>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function kodeUser(){
        let level = $('#level').val()
        let form = '<div class="col-3 d-flex justify-content-end"><label for="kode">Kode Inspector<span class="text-danger" >*</span></label></div><div class="col-9"><input type="number" name="kode" id="kode" class="form-control form-control-sm"></div>';
        if(level == 3){
            $('#form-kode').html(form);
        }else{
            $('#form-kode').empty();
        }
    }
</script>
@endsection