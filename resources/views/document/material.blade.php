@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-file"></em>
                Document Material 
            </h3>
        </div>
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li>
                            <a href="" class="btn btn-white btn-dim btn-outline-primary">
                                <em class="icon ni ni-plus"></em><span>Tambah Data</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
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
                    <th>Material</th>
                    <th>COA</th>
                    <th>COO</th>
                    <th>PDS</th>
                    <th>MSDS</th>
                    <th>Berita Acara</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@endsection