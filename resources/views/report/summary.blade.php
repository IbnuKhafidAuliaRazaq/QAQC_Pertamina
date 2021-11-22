@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-archive"></em>
                Summary 
            </h3>
        </div>
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt">
                            <a href="{{ url('summary/pdf') }}" target="_blank" class="btn btn-danger btn-sm">
                                <em class="icon ni ni-printer"></em><span>Export PDF</span>
                            </a>
                        </li>
                        <li class="nk-block-tools-opt">
                            <a href="{{ url('summary/excel') }}" class="btn btn-success btn-sm">
                                <em class="icon ni ni-printer-fill"></em><span>Export Excel</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- .nk-block-head-content -->
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <div class="row mb-3">
            <div class="col-4 col-sm-3">
                <div class="nk-order-ovwg-data sell">
                    <div class="amount d-flex align-items-center justify-content-between">
                        {{$masuk}}
                        <em class="icon ni ni-download"></em>
                    </div>
                    <div class="info">Barang Masuk</div>
                </div>
            </div>
            <div class="col-4 col-sm-3">
                <div class="nk-order-ovwg-data sell">
                    <div class="amount  d-flex align-items-center justify-content-between">
                        {{$keluar}}
                        <em class="icon ni ni-upload"></em>
                    </div>
                    <div class="info">Barang Keluar</div>
                </div>
            </div>
            {{-- <div class="col-4 col-sm-3 float-right">
                <div style="width: 150px" class="btn btn-sm btn-danger m-1"><em class="icon ni ni-printer"></em> Export PDF</div>
                <div style="width: 150px" class="btn btn-sm btn-success m-1"><em class="icon ni ni-printer-fill"></em> Export Excel</div>
            </div> --}}
        </div>
        <table class="table datatable-init" style="font-size: 12px" >
            <thead >
                <tr>
                    <th>Kode OAS</th>
                    <th>Sercom</th>
                    <th>Nama Barang</th>
                    <th>Prouduct In</th>
                    <th>Product Out</th>
                    <th>Balance Stock</th>
                    <th>Minimum Stock</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($distinct_data as $dst)
                    <tr>
                        <td> {{ $dst->oas_code }} </td> 
                        <td> {{ $dst->sercom_name }} </td>
                        <td>
                            {{ $dst->tool_name }}
                        </td>
                        <!-- <td> {{ $dst->qr_code }} </td> -->
                        <td> {{ $dst->product_in }} </td>
                        <td> {{ $dst->product_out }} </td>
                        <td> {{ $dst->quantity_code }} </td>
                        <td> <span class="min_stock badge badge-primary" onclick="minStock({{$dst->min_stock_id}},{{$dst->min_stock}})" data-toggle="modal" data-target="#modalDefault">{{ $dst->min_stock }}</span> </td>
                        <td> 
                            @if ($dst->quantity_code <= $dst->min_stock)
                                <strong class="text-danger" >TOP UP</strong>
                            @else
                                <strong class="text-success" >OK</strong>
                            @endif    
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Content Code -->
<div class="modal fade" tabindex="-1" id="modalDefault">    
    <div class="modal-dialog modal-dialog-top modal-sm" role="document">        
        <div class="modal-content">            
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">                
                <em class="icon ni ni-cross"></em>           
            </a>            
            <div class="modal-header">                
                <h5 class="modal-title">Ubah Minimal Stock</h5>            
            </div>       
            <form action="{{ url('summary_all/min_stock') }}" method="post">  
            @csrf 
            <div class="modal-body modal-body-sm">        
                <input type="hidden" name="id" id="idMin">        
                <input type="number" class="form-control" name="min_stock" id="stock">            
            </div>            
            <div class="modal-footer bg-light">                
                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>          
            </div>   
            </form>       
        </div>    
    </div>
</div>
@endsection

@section('js')
<script>
    function minStock(id, stock){
        $('#idMin').val(id)
        $('#stock').val(stock)
    }
</script>
@endsection