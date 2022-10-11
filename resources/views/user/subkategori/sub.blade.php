@extends('layouts.main')

@section('container')
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50" data-aos="fade-up">

        <div class="container mt-2 mb-2" style="width: 50%, height: 100%">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('assets/img/topi.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Ini untuk semua kategori kendaraan</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('assets/img/topi.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('assets/img/topi.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center row-container mb-3 mt-4">
                <div class="col-md-8 mb-4">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="judul-kategori mb-3" style="background-color: #fff; padding: 5px 10px;">
                <h5 class="text-center text-success" style="margin-top: 5px"><b>Kategori Kendaraan</b></h5>
            </div>
            <div class="row text-center row-container mt-3">
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="menu-kategori">
                        <a href="/user/kategori/kendaraan">
                            <img src="{{ asset('assets/img/kecil.png') }}" class="img-categori mt-4">
                        </a>
                        <p class="mt-2">Kendaraan Kecil</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="menu-kategori">
                        <a href="$">
                            <img src="{{ asset('assets/img/sedang.png') }}" class="img-categori mt-4">
                        </a>
                        <p class="mt-2">Kendaraan Sedang</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="menu-kategori">
                        <a href="$">
                            <img src="{{ asset('assets/img/besar.png') }}" class="img-categori mt-4">
                        </a>
                        <p class="mt-2">Kendaraan Besar</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="judul-layanan" style="background-color: #fff; padding: 5px 10px;">
                <div class="row">
                    <div class="row mb-2">
                        <div class="col-6">
                            <h5 class="mt-4 text-success"><b>Semua Kategori</b></h5>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-select-sm mt-4" aria-label=".form-select-sm example">
                                <option selected>Jarak</option>
                                <option value="1">Terdekat</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-select-sm mt-4" aria-label=".form-select-sm example">
                                <option selected>Jam Buka</option>
                                <option value="1">Buka sekarang</option>
                                <option value="1">Buka 24 jam</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-8 col-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <a href="/user/kategori/detail"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top mt-3" alt=""></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p><small>Wijaya|Titipsini</small><br>
                                            <strong style="font-size: 13px">Kendaraan Kecil</strong>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-success" style="font-size: 13px">
                                            <b>Rp 70.000 / hari</b>
                                        </p> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 text-warning" style="font-size: 13px">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-muted" style="font-size: 13px">3.5 | Tersedia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-8 col-10 mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <a href="/user/subkategori/detailbaru"><img src="{{ asset('assets/img/kontainer.png') }}" class="card-img-top mt-3" alt=""></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p><small>Abah titip</small><br>
                                            <strong style="font-size: 13px">Kendaraan Besar</strong>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-success" style="font-size: 13px">
                                            <b>Rp 70.000 / hari</b>
                                        </p> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 text-warning" style="font-size: 13px">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-muted" style="font-size: 13px">3.5 | Tutup</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-8 col-10 mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <a href="/user/subkategori/detailbaru"><img src="{{ asset('assets/img/vespa.png') }}" class="card-img-top mt-3" alt=""></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p><small>Abah titip</small><br>
                                            <strong style="font-size: 13px">Kendaraan Kecil</strong>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-success" style="font-size: 13px">
                                            <b>Rp 80.000 / hari</b>
                                        </p> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 text-warning" style="font-size: 13px">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-muted" style="font-size: 13px">3.5 | Tersedia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-8 col-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <a href="/user/subkategori/detailbaru"><img src="{{ asset('assets/img/mobil.png') }}" class="card-img-top mt-3" alt=""></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p><small>Wijaya|Titipsini</small><br>
                                            <strong style="font-size: 13px">Kendaraan Sedang</strong>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-success" style="font-size: 13px">
                                            <b>Rp 70.000 / hari</b>
                                        </p> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 text-warning" style="font-size: 13px">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-muted" style="font-size: 13px">3.5 | Tersedia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-8 col-10 mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <a href="/user/subkategori/detailbaru"><img src="{{ asset('assets/img/ge.png') }}" class="card-img-top mt-3" alt=""></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p><small>Abah titip</small><br>
                                            <strong style="font-size: 13px">Kendaraan Besar</strong>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-success" style="font-size: 13px">
                                            <b>Rp 70.000 / hari</b>
                                        </p> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 text-warning" style="font-size: 13px">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-muted" style="font-size: 13px">3.5 | Tutup</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-8 col-10 mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <a href="/user/subkategori/detailbaru"><img src="{{ asset('assets/img/bb.png') }}" class="card-img-top mt-3" alt=""></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p><small>Abah titip</small><br>
                                            <strong style="font-size: 13px">Kendaraan Kecil</strong>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-success" style="font-size: 13px">
                                            <b>Rp 80.000 / hari</b>
                                        </p> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 text-warning" style="font-size: 13px">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-muted" style="font-size: 13px">3.5 | Tersedia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-8 col-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <a href="/user/subkategori/detailbaru"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top mt-3" alt=""></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p><small>Wijaya|Titipsini</small><br>
                                            <strong style="font-size: 13px">Kendaraan Kecil</strong>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-success" style="font-size: 13px">
                                            <b>Rp 70.000 / hari</b>
                                        </p> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 text-warning" style="font-size: 13px">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-muted" style="font-size: 13px">3.5 | Tersedia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-8 col-10 mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <a href="/user/subkategori/detailbaru"><img src="{{ asset('assets/img/kontainer.png') }}" class="card-img-top mt-3" alt=""></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p><small>Abah titip</small><br>
                                            <strong style="font-size: 13px">Kendaraan Besar</strong>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-success" style="font-size: 13px">
                                            <b>Rp 70.000 / hari</b>
                                        </p> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 text-warning" style="font-size: 13px">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-muted" style="font-size: 13px">3.5 | Tutup</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-8 col-10 mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <a href="/user/subkategori/detailbaru"><img src="{{ asset('assets/img/vespa.png') }}" class="card-img-top mt-3" alt=""></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p><small>Abah titip</small><br>
                                            <strong style="font-size: 13px">Kendaraan Kecil</strong>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-success" style="font-size: 13px">
                                            <b>Rp 80.000 / hari</b>
                                        </p> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 text-warning" style="font-size: 13px">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-muted" style="font-size: 13px">3.5 | Tersedia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-8 col-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <a href="/user/subkategori/detailbaru"><img src="{{ asset('assets/img/mobil.png') }}" class="card-img-top mt-3" alt=""></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p><small>Wijaya|Titipsini</small><br>
                                            <strong style="font-size: 13px">Kendaraan Sedang</strong>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-success" style="font-size: 13px">
                                            <b>Rp 70.000 / hari</b>
                                        </p> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 text-warning" style="font-size: 13px">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-muted" style="font-size: 13px">3.5 | Tersedia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-8 col-10 mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <a href="/user/subkategori/detailbaru"><img src="{{ asset('assets/img/ge.png') }}" class="card-img-top mt-3" alt=""></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p><small>Abah titip</small><br>
                                            <strong style="font-size: 13px">Kendaraan Besar</strong>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-success" style="font-size: 13px">
                                            <b>Rp 70.000 / hari</b>
                                        </p> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 text-warning" style="font-size: 13px">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-muted" style="font-size: 13px">3.5 | Tutup</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-8 col-10 mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <a href="/user/subkategori/detailbaru"><img src="{{ asset('assets/img/bb.png') }}" class="card-img-top mt-3" alt=""></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p><small>Abah titip</small><br>
                                            <strong style="font-size: 13px">Kendaraan Kecil</strong>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-success" style="font-size: 13px">
                                            <b>Rp 80.000 / hari</b>
                                        </p> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 text-warning" style="font-size: 13px">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-muted" style="font-size: 13px">3.5 | Tersedia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection