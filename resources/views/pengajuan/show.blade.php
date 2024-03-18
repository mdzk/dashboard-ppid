@extends('layouts.main')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold">Pengajuan</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Detail Pengajuan</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <form id="formAccountSettings" onsubmit="return false">

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Nama</label>
                                    <p class="bg-light fw-bold p-3 rounded">{{ $pengajuan->nama }}</p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">NIK</label>
                                    <p class="bg-light  p-3 rounded">{{ $pengajuan->nik }}</p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Alamat</label>
                                    <p class="bg-light p-3 rounded">{{ $pengajuan->alamat }}</p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">No Telepon</label>
                                    <p class="bg-light p-3 rounded">{{ $pengajuan->no_tlp }}</p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Pekerjaan</label>
                                    <p class="bg-light p-3 rounded">{{ $pengajuan->pekerjaan }}</p>
                                </div>
                            </div>



                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Informasi</label>
                                    <p class="bg-light p-3 rounded">{{ $pengajuan->informasi }}</p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Alasan</label>
                                    <p class="bg-light p-3 rounded">{{ $pengajuan->alasan }}</p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md-6 mb-3">
                                    <label for="nameWithTitle" class="form-label">KTP</label>
                                    <div class="bg-light p-3 rounded">
                                        <object data="{{ $pengajuan->photo_ktp }}" type="application/pdf" width="100%"
                                            height="auto">
                                            <p>Alternative text - include a link <a href="{{ $pengajuan->photo_ktp }}">to
                                                    the File!</a></p>
                                        </object>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="nameWithTitle" class="form-label">KTP</label>
                                    <div class="bg-light p-3 rounded">
                                        <object data="{{ $pengajuan->swa_photo_ktp }}" type="application/pdf" width="100%"
                                            height="auto">
                                            <p>Alternative text - include a link <a
                                                    href="{{ $pengajuan->swa_photo_ktp }}">to
                                                    the File!</a></p>
                                        </object>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
        </div>
    </div>
@endsection
