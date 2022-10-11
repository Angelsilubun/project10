@extends('layouts.main')

@section('container')
    <!-- card edit alamat -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
            
            <div class="container mt-2 mb-2">
                <div class="row row-layanan">
                    <div class="col-lg-5 mt-5">
                        <figure class="figure">
                            <img src="{{ asset('assets/img/z.png') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 450px">
                            <figcaption class="figure-caption d-flex justify-content-evenly">
                                <a href="#">
                                    <img src="{{ asset('assets/img/z.png') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 100px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/z.png') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 100px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/z.png') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 100px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/z.png') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 100px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/z.png') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 100px">
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <div class="nama-vendor">
                            <p class="fw-bold">Penitipan motor Wijaya | titipsini</p>
                        </div>
                        <div class="status text-muted">
                            <p><i class="bi bi-star-fill text-warning"></i> 3.8 | Tersedia | Layanan (24)</p>
                        </div>
                        <div class="harga">
                            <p class="fw-bold">Rp 70.000 / hari</p>
                        </div>
                        <hr>
                        <hr>
                        
                        <div class="row">
                            <div class="detail">
                                <p class="text-success fw-bold">Detail Layanan</p>
                            </div>

                            <div class="list-detail row">
                                <dd class="col-sm-3 text-muted" style="font-size: 13px">Kategori</dd>
                                <dd class="col-sm-9 text-success" style="font-size: 13px">Layanan Kendaraan Kecil</dd>
                                <dd class="col-sm-3 text-muted" style="font-size: 13px">Alamat</dd>
                                <dd class="col-sm-9 text-success" style="font-size: 13px">Kab. Sleman, Daerah Istimewa Yogyakarta</dd>
                            </div>

                            <div class="deskripsi">
                                <p>Deskripsi Penitipan motor Wijaya | titipsini menyediakan layanan penitipan kendaraan kecil dengan kapasitas lahan 250m x 250m.
                                </p>
                                <ul class="list-unstyled">
                                    <li>Spesifikasi layanan:
                                      <ul>
                                        <li>Free cuci kendaraan</li>
                                        <li>Kendaraan dibersihkan setiap pagi</li>
                                        <li>Kontrol mesin</li>
                                        <li>Keamanan terjaga</li>
                                        <li>Konsultasi & support</li>
                                      </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <h6 class="fw-bold">Atur Pemesanan</h6>
                                    <div class="col-6">
                                        <p style="font-size: 14px">Quantity</p>
                                    </div>
                                    <div class="col-12">
                                        <div class="box text-dark">
                                            <div class="wrapper" style="width: 200px">
                                                <span class="minus">-</span>
                                                <span class="num">01</span>
                                                <span class="plus">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Tanggal Masuk</p>
                                        <input type="date" class="form-control" id="tanggal">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label for="tanggalkeluar" class="form-label" style="font-size: 14px">Tanggal Keluar</label>
                                        <input type="date" class="form-control" id="tanggal">
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label for="Note" style="font-size: 14px">Catatan</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-white"><i class="bi bi-bookmark-plus"></i></span>
                                            <input type="text" class="form-control bg-white" placeholder="eg.skooter" name="skooter">
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-12 mx-auto">
                                        <a class="btn btn-outline-success btn-sm" href="/user/pemesanan/pemesanan" role="button">Pesan</a>
                                    </div>
                                    <div class="kolom mt-3 text-center text-muted">
                                        <p><i class="bi bi-chat-text-fill"></i> Chat | 
                                            <i class="bi bi-heart-fill"></i> Wishlist
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="row row-layanan mt-4">
                        <div class="detail">
                            <p class="text-success fw-bold">Ulasan Layanan</p>
                        </div>
                        <div class="col-4">
                            <div class="row container">
                                <div class="col-7 text-center">
                                    <p style="font-size: 25px;"><i class="bi bi-star-fill text-warning p-2"></i><b>5.0 /</b><small class="text-muted" style="font-size: 15px"> 5.0 </small></p>
                                </div>
                                <div class="col-12">
                                    <p class="text-muted" style="font-size: 16px">866 Rating . 800 Ulasan</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <p>5</p>
                                </div>
                                <div class="col-9">
                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-label="Basic example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <p>750</p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-1">
                                    <p>4</p>
                                </div>
                                <div class="col-9">
                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-label="Basic example" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <p>20</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-1">
                                    <p>3</p>
                                </div>
                                <div class="col-9">
                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-label="Basic example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <p>5</p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-1">
                                    <p>2</p>
                                </div>
                                <div class="col-9">
                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <p>15</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-1">
                                    <p>1</p>
                                </div>
                                <div class="col-9">
                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <p>10</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="row">
                                <div class="col-4">
                                    <div class="detail">
                                        <p class="text-success fw-bold">Review Layanan</p>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3 row">
                                        <div class="col-5 mt-1">
                                            <select class="form-select-sm selecttt" aria-label="Default select example">
                                                <option selected>Urutkan</option>
                                                <option value="1">Terbaru</option>
                                                <option value="1">Rating tertinggi</option>
                                                <option value="2">Rating terendah</option>
                                            </select>
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