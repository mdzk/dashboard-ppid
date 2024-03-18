@extends('layouts.main')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-8">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Selamat datang di dashboard PPID</h5>
                                <p class="mb-4">
                                    Sistem Informasi PPID Kabupaten Tulang Bawang
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img loading="lazy" src="{{ asset('img') }}/illustrations/man-with-laptop-light.png"
                                    height="140" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <a href="/keberatan">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img loading="lazy" src="{{ asset('img') }}/icons/icon-fingerprint.png"
                                                alt="chart success" class="rounded" />
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1">KEBERATAN</span>
                                    <h3 class="card-title mb-2">
                                        {{ $keberatan }}
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <a href="/pengajuan">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img loading="lazy" src="{{ asset('img') }}/icons/icon-fingerprint.png"
                                                alt="chart success" class="rounded" />
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Pengajuan</span>
                                    <h3 class="card-title mb-2">
                                        {{ $pengajuan }}
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
