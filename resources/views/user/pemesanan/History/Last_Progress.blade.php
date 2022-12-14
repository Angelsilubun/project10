@extends('layouts.main')
@section('container') 

<section id="history" class="history section-bg" style="padding-top: 100px;" data-aos-delay="50">
    <div class="container" data-aos="fade-up">
        <div class="card">
            <div class="card-body">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/user/index">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">History</li>
                  </ol>
                </nav>
            </div>
        </div>

        <div class="mt-3">
            <ul class="nav nav-tabs">
                <li class="nav-item col-md-6">
                  <a class="nav-link text-center" aria-current="page" href="/user/pemesanan/History/On_Progress">Pesanan</a>
                </li>
                <li class="nav-item col-md-6">
                  <a class="nav-link text-center active"  href="/user/pemesanan/History/Last_Progress">History</a>
                </li>
            </ul>
        </div>

        <div class="card mt-3">
          <div class="mt-2" style="max-width: 100%;">
              <div class="row g-0">
                <div class="col-md-2 p-4 justify-content-center">
                  <img src="{{ asset('assets/img/icon_kendaraan.png') }}" class="img-fluid rounded-start" alt="..." style="width: 75%; margin-left: 30px">
                </div>
                <div class=" col-md-10">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <p class="Pesanan fs-5"><b>Wijaya - titipsini | Layanan Kendaraan</b></p>
                      </div>
                      <div class="col-3 text-end">
                        <p class="idOrder text-success fs-6"><b>ORDER M-012912811288</b></p>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col">
                          <p class="tglTransaksi" style="font-size: 14px">
                            Tanggal Transaksi: <b>16/09/2022</b> | 
                            Total: <b> Rp 500.000</b> |
                            2 Unit kendaraan x 4 hari
                          </p>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <p class="text-success"><b>Layanan Selesai</b><i class="bi bi-check-circle-fill p-1"></i></p>
                      </div>
                      <div class="col-9 text-end">
                        <p class="text-success" style="font-size: 14px"><b>Lihat detail transaksi</b>
                          <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#detailTransaksi">
                            <i class="bi bi-three-dots text-dark p-2 mt-2"></i>
                          </button>
                        </p>
                      </div>
                  </div>
                  </div>
                </div> 
              </div>
          </div>
          <div class="mt-2" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-2 p-4 justify-content-center">
                <img src="{{ asset('assets/img/icon_kendaraan.png') }}" class="img-fluid rounded-start" alt="..." style="width: 75%; margin-left: 30px">
              </div>
              <div class=" col-md-10">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <p class="Pesanan fs-5"><b>Wijaya - titipsini | Layanan Kendaraan</b></p>
                    </div>
                    <div class="col-3 text-end">
                      <p class="idOrder text-success fs-6"><b>ORDER M-012912811288</b></p>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col">
                        <p class="tglTransaksi" style="font-size: 14px">
                          Tanggal Transaksi: <b>16/09/2022</b> | 
                          Total: <b> Rp 500.000</b> |
                          2 Unit kendaraan x 4 hari
                        </p>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-3">
                      <p class="text-danger"><b>Layanan Batal</b>
                        <i class="bi bi-x-circle-fill p-1"></i>
                      </p>
                    </div>
                    <div class="col-9 text-end">
                      <p class="text-success" style="font-size: 14px"><b>Lihat detail transaksi</b>
                        <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#detailTransaksi">
                          <i class="bi bi-three-dots text-dark p-2 mt-2"></i>
                        </button>
                      </p>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
        </div>
      </div>
    </div>

    <!-- Modal udah bayar -->
    <div class="modal fade" id="detailTransaksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-5">
                  <p class="text-success" style="font-size: 18px"><b>Layanan Success<i class="bi bi-check-circle-fill p-1"></i></b></p> <!-- Status pembayaran kayak pembayarannya berhasil atau blm bayar -->
              </div>
              <div class="col-md-7 text-end">
                  <p style="font-size: 13px">16/09/2022 - 10:21pm<br>
                      Order M-012912811288
                  </p>
              </div>
            </div>
            <h4 class="text-muted">Detail Pemesanan</h4>
            <div class="container mb-3">
              <div class="row row-cols-1 row-cols-md-2 g-4">
                  <div class="col">
                      <div class="card">
                          <div class="card-body">
                              <img src="{{ asset('assets/img/box.png') }}" class="card-img-top" style= "height: 180px" alt="...">
                          </div>
                      </div>
                  </div>
                  <div class="col">
                      <div class="card">
                          <div class="card-body">
                              <img src="{{ asset('assets/img/calender.png') }}" class="card-img-top" style= "height: 180px" alt="...">
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div>
              <h4 class="text-muted">Rincian Pembayaran</h4>
              <div class="row">
                  <div class="col-md">
                      <p>Id Order</p>
                  </div>
                  <div class="col-md-8">
                      <p class="text-end">1796654634</p>
                  </div>   
              </div>
              <div class="row">
                  <div class="col-md">
                      <p>Jenis kendaraan</p>
                  </div>
                  <div class="col-md-8">
                      <p class="text-end">Motor, Mobil</p>
                  </div>   
              </div>
              <div class="row">
                  <div class="col-md">
                      <p>Pick Up</p>
                  </div>
                  <div class="col-md-8">
                      <p class="text-end">Antar - Jemput</p>
                  </div>   
              </div>
              <hr>

              <div class="row">
                  <div class="col-md">
                      <p>Total Service</p>
                  </div>
                  <div class="col-md-8">
                      <p class="text-end">2 unit kendaraan x 4 hari</p>
                  </div>   
              </div>
              <div class="row">
                  <div class="col-md">
                      <p>Subtotal</p>
                  </div>
                  <div class="col-md-8">
                      <p class="text-end">Rp 400.000</p>
                  </div>   
              </div>
              <div class="row">
                  <div class="col-md">
                      <p>Discount 15%</p>
                  </div>
                  <div class="col-md-8">
                      <p class="text-end">Rp 350.000</p>
                  </div>   
              </div>
              <div class="row">
                <div class="col-md">
                    <p>Biaya admin</p>
                </div>
                <div class="col-md-8">
                    <p class="text-end">Rp 15.000</p>
                </div>   
            </div>
              <hr>
              <div class="row">
                  <div class="col-md">
                      <p>Total Harga</p>
                  </div>
                  <div class="col-md-8">
                      <p class="text-end">Rp 365.000</p>
                  </div>   
              </div>
              <hr>
              <div class="row">
                  <div class="col-md ">
                      <p>Metode Pembayaran</p>
                  </div>
                  <div class="col-md-8">
                      <p class="text-end">Transfer Bank</p>
                  </div>
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#Penilaian">Kasih bintang</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal pesanan selesai -->
    <div class="modal fade" id="detailPaid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content mt-3">
          <div class="modal-body">
            <div class="container text-center mt-4" style="font-size:20px">
              <p> Saya telah memastikan bahwa kendaraan yang dititipkan telah diterima kembali dan tidak ada masalah apapun.</p>
              <div>
                <a href="/user/pemesanan/History/onprogress"><button class="btn btn-outline-success col-md-12 ">Konfirmasi</button></a>      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal pesanan penilaian -->
    <div class="modal fade" id="Penilaian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <p style="font-size: 15px"><b>Kasih rating, yuk</b></p>
            <div class="rate text-warning text-center">
              <p class="fs-2">
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
              </p>
            </div>
            
            <p style="font-size: 15px"><b>Tulis masukan kamu dibawah, ya</b></p>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

            <div class="d-grid gap-2 col-6 mx-auto mt-4">
              <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#nilai">Kirim</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal penilaian -->
    <div class="modal fade" id="nilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content mt-3">
          <div class="modal-body">
            <p class="text-success fw-bold">Terimakasih atas penilaian dan kepercayaannya. Izinin admin untuk pantun</p>
            <p class="lh-base">Jalan-jalan ke pulau bali<br>
              Tidak lupa membeli kedondong<br>
              Kalau ada orderan lagi<br>
              Pastinya titipsini kasih diskon dong</p>

              <div class="d-grid gap-2 col-6 mx-auto mt-4">
                <a class="btn btn-success" href="/user/subkategori/subbaru" role="button">Order lagi</a>
              </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection