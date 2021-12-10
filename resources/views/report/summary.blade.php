@extends('template.app')
@section('app')
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Summary All</h6>
                </div>
                {{-- <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                </div> --}}
            </div>
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Barang Masuk</h5>
                                    <span class="h2 font-weight-bold mb-0">{{ number_format($masuk, 0, ',', '.') }}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="ni ni-app"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Barang Keluar</h5>
                                    <span class="h2 font-weight-bold mb-0">{{ number_format($keluar, 0, ',', '.') }}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                        <i class="ni ni-app"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <h5 class="h3 mb-0">Summary</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table datatable-init" >
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
            </div>
        </div>
    </div>
</div>
<!-- Modal Content Code -->
<div class="modal fade" tabindex="-1" id="modalDefault">    
    <div class="modal-dialog modal-dialog-top modal-sm" role="document">       
        <div class="modal-content">
            <form action="{{ url('summary_all/min_stock') }}" method="post">  
            @csrf
            <div class="modal-body modal-body-sm">
                <h2>Ubah Minimum Stock</h2>      
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