<?php
 $divisi = DB::select('select * from division');
?>
<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <a href="html/index.html"
                class="logo-link nk-sidebar-logo text-light text-uppercase font-weight-bold"
                style="font-size: 24px;">
                Pertamina
            </a>
        </div>
    </div>
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Menu Utama</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('/') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-box-view-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('summary_all') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-qr"></em></span>
                            <span class="nk-menu-text">Summary</span>
                        </a>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-scan"></em></span>
                            <span class="nk-menu-text">Scan In/Out</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ url('summary/equipment_in') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Equipment In</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('summary/equipment_out') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Equipment Out</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('summary/chemical_in') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Chemical In</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('summary/chemical_out') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Chemical Out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-file"></em></span>
                            <span class="nk-menu-text">Document</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ url('document_equipment') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Equipment</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('document_material') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Material</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-alt"></em></span>
                            <span class="nk-menu-text">Division</span>
                        </a>
                        <ul class="nk-menu-sub">
                            @foreach($divisi as $div)
                            <li class="nk-menu-item">
                                <a href="{{ url('divisi_tool/'.$div->id) }}" class="nk-menu-link">
                                    <span class="nk-menu-text">{{ $div->division_name }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
                            <span class="nk-menu-text">General</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ url('oas') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">OAS</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('division') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Divisi</span>
                                </a>
                            </li>
                            {{-- <li class="nk-menu-item">
                                <a href="{{ url('part-tool') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Bagian Alat</span>
                                </a>
                            </li> --}}
                            <li class="nk-menu-item">
                                <a href="{{ url('sercom') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Sercom</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('zone') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Zona</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('regional') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Regional</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('user') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">User</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>