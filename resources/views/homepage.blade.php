@extends('template.app')
@section('app')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-uppercase">
                <em class="icon ni ni-box-view-fill"></em>
                Panel Beranda
            </h3>
        </div>
    </div>
</div>
<div class="nk-block">
    <div class="card card-borderd h-100">
        <div class="card-inner">
            <div class="row">
                <div class="col-6 col-sm-3">
                    <div class="nk-order-ovwg-data buy">
                        <div class="amount">0</div>
                        <div class="info">Berita Acara</div>
                        <div class="title">
                            <a href="#">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="nk-order-ovwg-data sell">
                        <div class="amount">{{ $masuk }}</div>
                        <div class="info">Barang Masuk</div>
                        <div class="title">
                            <a href="#">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="nk-order-ovwg-data buy">
                        <div class="amount">{{ $keluar }}</div>
                        <div class="info">Barang Keluar</div>
                        <div class="title">
                            <a href="#">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="nk-order-ovwg-data sell">
                        <div class="amount">{{ $sercom }}</div>
                        <div class="info">Jumlah Sercom</div>
                        <div class="title">
                            <a href="#">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
