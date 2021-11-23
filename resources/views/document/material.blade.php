@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-file"></em>
                Document Chemical 
            </h3>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <table class="table datatable-init" >
            <thead >
                <tr>
                    <th>Tanggal</th>
                    <th>Kode OAS</th>
                    <th>Nama Chemical</th>
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
                    <td><a target="_blank" href="http://qaqcdwipertamina.com/mobile_joborder/new_joborder/public/documents/{{ $doc->document_name }}"><h3><em class="icon ni ni-file"></em></h3><span>Click To View!</span></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection