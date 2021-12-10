@extends('template.app')
@section('app')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Document Equipment</h6>
                </div>
                {{-- <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
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
                            <h5 class="h3 mb-0">Document Equipment</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table datatable-init" >
                        <thead >
                            <tr>
                                <th>Tanggal</th>
                                <th>Kode OAS</th>
                                <th>Nama Equipment</th>
                                <th>Tipe Dokumen</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($documents as $doc)
                            <tr>
                                <td>{{ $doc->tanggal }}</td>
                                <td>{{ $doc->oas }}</td>
                                <td>{{ $doc->name }}</td>
                                <td>{{ $doc->document_type }}</td>
                                <td><a target="_blank" href="http://qaqcdwipertamina.com/mobile_joborder/new_joborder/public/documents/{{ $doc->document_name }}"><h3><i class="fas fa-file"></i></h3><span>Click To View!</span></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection