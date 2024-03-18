@extends('layouts.main')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold">Keberatan</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Detail Keberatan</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <form id="formAccountSettings" onsubmit="return false">

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Tujuan</label>
                                    <p class="bg-light p-3 rounded">{{ $keberatan->tujuan }}</p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Nama</label>
                                    <p class="bg-light fw-bold p-3 rounded">{{ $keberatan->nama }}</p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">No Telepon</label>
                                    <p class="bg-light p-3 rounded">{{ $keberatan->no_tlp }}</p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Pekerjaan</label>
                                    <p class="bg-light p-3 rounded">{{ $keberatan->pekerjaan }}</p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Alamat</label>
                                    <p class="bg-light p-3 rounded">{{ $keberatan->alamat }}</p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Nama yang dikuasakan</label>
                                    <p class="bg-light p-3 rounded">{{ $keberatan->nama_yg_dikuasakan ?? 'Tidak ada' }}</p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Email yang dikuasakan</label>
                                    <p class="bg-light p-3 rounded">{{ $keberatan->email_yg_dikuasakan ?? 'Tidak ada' }}</p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">No Telepon yang dikuasakan</label>
                                    <p class="bg-light p-3 rounded">{{ $keberatan->no_tlp_yg_dikuasakan ?? 'Tidak ada' }}
                                    </p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Pekerjaan yang dikuasakan</label>
                                    <p class="bg-light p-3 rounded">{{ $keberatan->pekerjaan_yg_dikuasakan ?? 'Tidak ada' }}
                                    </p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Alamat yang dikuasakan</label>
                                    <p class="bg-light p-3 rounded">{{ $keberatan->alamat_yg_dikuasakan ?? 'Tidak ada' }}
                                    </p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Alasan yang dikuasakan</label>
                                    <p class="bg-light p-3 rounded">{{ $keberatan->alasan_yg_dikuasakan ?? 'Tidak ada' }}
                                    </p>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Surat Kuasa</label>
                                    <div class="bg-light p-3 rounded">
                                        <object data="{{ $keberatan->surat_kuasa }}" type="application/pdf" width="100%"
                                            height="600px">
                                            <p>Alternative text - include a link <a href="{{ $keberatan->surat_kuasa }}">to
                                                    the PDF!</a></p>
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
