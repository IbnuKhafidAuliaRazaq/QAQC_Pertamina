<?php
 $divisi = DB::select('select * from division');
?>
@if(Auth::user()->level == 2)
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('images/logo.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('summary_all') ? 'active' : '' }}" href="{{ url('summary_all') }}">
                <i class="ni ni-chart-pie-35 text-primary"></i>
                <span class="nav-link-text">Summary</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Scan In / Scan Out</span>
          </h6>
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ request()->is('summary/equipment_in') ? 'active' : '' }}" href="{{ url('summary/equipment_in') }}">
                <i class="ni ni-cloud-download-95 text-primary"></i>
                <span class="nav-link-text">Equipment In</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('summary/equipment_out') ? 'active' : '' }}" href="{{ url('summary/equipment_out') }}">
                <i class="ni ni-cloud-upload-96 text-primary"></i>
                <span class="nav-link-text">Equipment Out</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('summary/chemical_in') ? 'active' : '' }}" href="{{ url('summary/chemical_in') }}">
                  <i class="ni ni-cloud-download-95 text-primary"></i>
                  <span class="nav-link-text">Chemical In</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('summary/chemical_out') ? 'active' : '' }}" href="{{ url('summary/chemical_out') }}">
                  <i class="ni ni-cloud-upload-96 text-primary"></i>
                  <span class="nav-link-text">Chemical Out</span>
                </a>
              </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Document</span>
          </h6>
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ request()->is('document_equipment') ? 'active' : '' }}" href="{{ url('document_equipment') }}">
                <i class="ni ni-box-2 text-primary"></i>
                <span class="nav-link-text">Equipment</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('document_material') ? 'active' : '' }}" href="{{ url('document_material') }}">
                <i class="ni ni-box-2 text-primary"></i>
                <span class="nav-link-text">Chemical</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">General</span>
          </h6>
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ request()->is('oas') ? 'active' : '' }}" href="{{ url('oas') }}">
                <i class="ni ni-paper-diploma text-primary"></i>
                <span class="nav-link-text">OAS</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('division') ? 'active' : '' }}" href="{{ url('division') }}">
                <i class="ni ni-archive-2 text-primary"></i>
                <span class="nav-link-text">Divisi</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('sercom') ? 'active' : '' }}" href="{{ url('sercom') }}">
                  <i class="ni ni-building text-primary"></i>
                  <span class="nav-link-text">Sercom</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('zone') ? 'active' : '' }}" href="{{ url('zone') }}">
                  <i class="ni ni-map-big text-primary"></i>
                  <span class="nav-link-text">Zona</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('regional') ? 'active' : '' }}" href="{{ url('regional') }}">
                  <i class="ni ni-map-big text-primary"></i>
                  <span class="nav-link-text">Regional</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('user') ? 'active' : '' }}" href="{{ url('user') }}">
                  <i class="ni ni-single-02 text-primary"></i>
                  <span class="nav-link-text">User</span>
                </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Division</span>
          </h6>
          <!-- Nav items -->
          <ul class="navbar-nav">
            @foreach ($divisi as $div)
            <li class="nav-item">
              <a class="nav-link" href="{{ url('divisi_tool/'.$div->id) }}">
                <i class="ni ni-app text-primary"></i>
                <span class="nav-link-text">{{ $div->division_name }}</span>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
</nav>
@endif