@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-gift"></em>
                Barang Masuk / Input Manual
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <form action="/equipment_in_store" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-3 d-flex justify-content-end">
                    <label for="oas_code">Kode OAS<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <div class="form-control-wrap">
                        <select name="oas_code" id="oas_code" class="form-select" data-ui="sm" >
                            <option value="">Pilih Kode OAS</option>
                            @foreach ($oas as $item)
                                <option value="{{ $item->oas_code }}">{{ $item->oas_code }} | {{ $item->oas_title }}</option>
                            @endforeach
                        </select>
                        @error('oas_code')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row division-area d-none">
                <div class="col-3 d-flex justify-content-end">
                    <label for="division_id">Pilih Divisi<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <div class="form-control-wrap">
                        <select name="division_id" id="division_id" class="form-select" data-ui="sm" >
                            <option value="">Pilih Divisi Barang</option>
                            @foreach ($division as $item)
                                <option value="{{ $item->id }}"> {{ $item->division_name }} | {{ $item->division_master }} </option>
                            @endforeach
                        </select>
                        @error('division_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row tool-area d-none">
                <div class="col-3 d-flex justify-content-end">
                    <label for="tool_id">Pilih Barang<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <div class="form-control-wrap">
                        <select name="tool_id" id="tool_id" class="form-select" data-ui="sm" >
                            <option value="">Pilih Nama Barang</option>  
                        </select>
                        @error('tool_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row tool-area d-none">
                <div class="col-3 d-flex justify-content-end">
                    <label for="qr_code">QR Code</label>
                </div>
                <div class="col-9">
                    <input type="text" name="qr_code" id="qr_code" class="form-control form-control-sm" readonly >
                </div>
            </div>
            <div class="form-group row tool-area d-none">
                <div class="col-3 d-flex justify-content-end">
                    <label for="zona_code">Kode Zona</label>
                </div>
                <div class="col-9">
                    <input type="text" name="zona_code" id="zona_code" class="form-control form-control-sm" readonly >
                </div>
            </div>
            <div class="form-group row tool-area d-none">
                <div class="col-3 d-flex justify-content-end">
                    <label for="tool_stock">Stok Barang</label>
                </div>
                <div class="col-9">
                    <input type="text" name="tool_stock" id="tool_stock" class="form-control form-control-sm" readonly >
                </div>
            </div>
            <div class="form-group row tool-area d-none">
                <div class="col-3 d-flex justify-content-end">
                    <label for="month_year">Bulan Dan Tahun</label>
                </div>
                <div class="col-9">
                    <input type="text" name="month_year" id="month_year" class="form-control form-control-sm" readonly >
                </div>
            </div>
            <div class="form-group row tool-area d-none">
                <div class="col-3 d-flex justify-content-end">
                    <label for="quantity">Jumlah Barang<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <input type="text" name="quantity" id="quantity" class="form-control form-control-sm">
                    @error('quantity')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row tool-area d-none">
                <div class="col-3 d-flex justify-content-end">
                    <label for="inspector_name">Inspector</label>
                </div>
                <div class="col-9">
                    <input type="text" name="inspector_name" id="inspector_name" class="form-control form-control-sm" readonly >
                    <input type="hidden" name="inspector_id" id="inspector_id">
                </div>
            </div>
            <div class="form-group row tool-area d-none">
                <div class="col-3 d-flex justify-content-end">
                    <label for="sercom_id">Pilih Sercom<span class="text-danger" >*</span></label>
                </div>
                <div class="col-9">
                    <div class="form-control-wrap">
                        <select name="sercom_id" id="sercom_id" class="form-select" data-ui="sm" >
                            <option value="">Pilih Sercom</option> 
                            @foreach ($sercom as $item)
                                <option value="{{$item->id}}">{{ $item->sercom_name }}</option>
                            @endforeach 
                        </select>
                        @error('sercom_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row loading d-none">
                <div class="col-3"></div>
                <div class="col-9">
                    <div class="spinner-grow spinner-grow-sm" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3"></div>
                <div class="col-9">
                    <a href="/equipment_in" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" name="simpan" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </div>
        </form>
    </div>
    {{-- @php
        echo request()->root();
    @endphp --}}
</div>
<script>
    const oas = document.querySelector('#oas_code')
    const division = document.querySelector('#division_id')
    const tool = document.querySelector('#tool_id')

    let divisionArea = document.querySelector('.division-area')
    let toolArea = document.querySelectorAll('.tool-area')
    let spinner = document.querySelector('.loading')

    var root = "<?php echo request()->root() ?>";
    var toolData

    oas.onchange = function () {
        if (oas.value !== '') {
            divisionArea.classList.add('d-flex')
            divisionArea.classList.remove('d-none')
        }
    }

    division.onchange = function () {
        if (division.value !== '') {
            spinner.classList.remove('d-none')
            fetch(root + '/api/tool-by-division/' + division.value)
                .then(req => req.json())
                .then(res => {
                    // console.log(res)
                    let node = res.forEach((item, index) => {
                        let option = document.createElement('option')
                        let optionText = document.createTextNode(item.tool_name)
                        option.appendChild(optionText)
                        option.setAttribute('value', item.id)

                        tool.appendChild(option)
                    })

                    toolData = res

                    spinner.classList.add('d-none')
                    toolArea.forEach((item, index) => {
                        toolArea[index].classList.add('d-flex')
                        toolArea[index].classList.remove('d-none')
                    })
                })

        }
    }

    tool.onchange = function(){
        if(tool.value !== ''){
            let data = toolData.filter(item => item.id == tool.value)
            let qrcode = data[0].tool_qr_code
            document.querySelector('#qr_code').value = qrcode
            let zone = qrcode.slice(0, 2)
            document.querySelector('#zona_code').value = zone
            document.querySelector('#tool_stock').value = data[0].tool_stock
            let M = qrcode.slice(22,24)
            let Y = qrcode.slice(24, 26)
            document.querySelector('#month_year').value = M + '/' + Y
            let inspector = qrcode.slice(18, 20);
            fetch(root + '/api/inspector-by-id/' + inspector)
            .then(req => req.json())
            .then(res => {
                document.querySelector('#inspector_name').value = res.fullname
                document.querySelector('#inspector_id').value = res.id
            })
            // document.querySelector('#qr_code').value = data[0].tool_qr_code
            // console.log(data)
        }
    }
</script>
@endsection