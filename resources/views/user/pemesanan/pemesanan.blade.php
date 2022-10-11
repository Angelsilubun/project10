@extends('layouts.main')
    <!-- card pemesanan barang -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
    
        <div class="container mt-4 mb-4" data-aos="fade-up">
            <div class="card mb-3">
                <div class="card-header bg-white">
                    <div class="row">
                        <div class="col mt-3">
                            <h5 class="text-success"><b><i class="bi bi-geo-alt-fill p-2"></i>Alamat Saya</b></h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="person-description">
                                <p class="text-black-100 text-wrap">
                                    <b>
                                        Alvi Nurbaetri<br>
                                        +62 815287322312
                                    </b>
                                </p>       
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="person-description">
                                <p class="text-black-100 text-wrap">
                                    Karangjambe, Gg. Arjuna No.59, Jaranan, Banguntapan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55198
                                </p>       
                            </div>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-outline-success btn-sm" disabled>Utama</button>
                            <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#alamatBaru">
                                Ubah
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-white">
                  <div class="jk">
                    <h5 class="text-success"><b>Jenis Kendaraan</b></h5>
                  </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Mobil</p>
                        </div>
                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">x 1</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Motor</p>
                        </div>
                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">x 1</p>
                        </div>
                    </div>
                    <hr width="100%" color="#c0c0c0">
                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Total kendaraan</p>
                        </div>
                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">2 unit</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-white">
                    <div class="jk">
                      <h5 class="text-success"><b>Detail Transaksi</b></h5>
                    </div>
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-6">
                                    <p style="margin-left: 40px">Total kendaraan</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p style="margin-right: 45px">2 unit</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <p style="margin-left: 40px">Durasi penitipan</p>
                            </div>
                            <div class="col-6 text-end">
                                <p style="margin-right: 70px">3 hari</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p style="margin-left: 40px">Pick Up</p>
                            </div>
                            <div class="col-6">
                                <p type="button" class="btn btn-white text-end" data-bs-toggle="modal" data-bs-target="#pickup" style="margin-left: 68%">Pilih pick up</p>
                            </div>
                        </div>
                        <hr width="100%" color="#c0c0c0">
                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Sub total</p>
                        </div>
                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">Rp 150.000</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Diskon</p>
                        </div>
                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">-</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Biaya penjemputan</p>
                        </div>
                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">Rp 15.000</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Total pembayaran</p>
                        </div>
                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">Rp 200.000</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Pembayaran</p>
                        </div>
                        <div class="col-6">
                            <p type="button" class="btn btn-white text-end" data-bs-toggle="modal" data-bs-target="#pembayaran" style="margin-left: 50%">Pilih metode pembayaran</p>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto" style="padding-top: 12px">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#checkoutUser">
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal-->
        <div class="modal fade" id="alamatBaru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-success">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Alamat saya</b></h5>
                        <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                                </svg>
                            </div>
                            <div class="col-9">
                                <p><b>Alvi | +62 815287322312 </b><br>
                                    Karangjambe, Gg. Arjuna No.59, Jaranan, Banguntapan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55198
                                </p>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#UbahAlamat1">
                                    Ubah
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#TambahAlamat1">
                                    <i class="bi bi-plus"></i>Tambah Alamat Baru
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-outline-success">Konfirmasi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="pickup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-success">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Pilih Pick Up</b></h5>
                        <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Antar - jemput
                            </label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Antar langsung ke tempat
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Pilih</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="checkoutUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-success">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Congratulations</b></h5>
                        <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card text-center">
                        <div class="card-body">
                          <img src="{{ asset('assets/img/centanghijauuu.png') }}" alt="centangHijau" width="120px" height="120px">
                          <h5 class="berhasil" style="padding-top: 5px; color: grey">Pesananmu sudah berhasil dibuat!</h5>
                          <h5 class="berhasil" style="padding-top: 5px; color: grey">Silahkan lanjutkan pembayaran</h5>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto mb-2">
                            <a class="btn btn-outline-success" href="/user/pemesanan/info_pembayaran" role="button">Pembayaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ubah -->
        <div class="modal fade" id="UbahAlamat1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-success">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Ubah Alamat</b></h5>
                        <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Nama</label>
                              <input class="form-control" type="text" placeholder="Rebecca Howard" aria-label="Disabled input example">
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Kontak</label>
                              <input class="form-control" type="text" placeholder="089598374543" aria-label="Disabled input example" >
                            </div>
                            <div class="mb-3">
                              <label for="text" class="col-sm-2 col-form-label">Alamat </label>
                                <input class="form-control mb-3" type="text" placeholder="Tembelang,Jombang, Jawa Timur 123422" aria-label="Disabled input example">
                                <input class="form-control mb-3" type="text" placeholder="Jln. Sukonandi No. 121 Santrean" aria-label="Disabled input example">
                                <input class="form-control mb-3" type="text" placeholder="Masuk Gng Depan" aria-label="Disabled input example">
                            </div>
                            <div>
                              <p href=""><i class="bi bi-geo-alt px-1"></i>Pilih Lokasi Kamu</p>
                              <iframe scrolling="no" marginheight="0" style="width: 100%" marginwidth="0" src="https://maps.google.com/maps?q=Jalan%20Janti%2C%20Gang%20Arjuna%2059%2C%20Karangjambe%2C%20Banguntapan%2C%20Bantul&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="%3$s" aria-label="%3$s" frameborder="0"></iframe>
                            </div>
                            <div class="cardHeader1" style="margin-top: 30px;">
                              <h6>Pilih sebagai alamat utama</h6>
                              <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                              </label>
                            </div>
                          </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#alamatBaru">Nanti</button>
                        <button type="button" class="btn btn-outline-success">Oke</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah -->
        <div class="modal fade" id="TambahAlamat1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-success">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Tambah Alamat</b></h5>
                        <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Nama</label>
                              <input class="form-control" type="text" placeholder="Rebecca Howard" aria-label="Disabled input example">
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Kontak</label>
                              <input class="form-control" type="text" placeholder="089598374543" aria-label="Disabled input example" >
                            </div>
                            <div class="mb-3">
                              <label for="text" class="col-sm-2 col-form-label">Alamat </label>
                                <input class="form-control mb-3" type="text" placeholder="Tembelang,Jombang, Jawa Timur 123422" aria-label="Disabled input example">
                                <input class="form-control mb-3" type="text" placeholder="Jln. Sukonandi No. 121 Santrean" aria-label="Disabled input example">
                                <input class="form-control mb-3" type="text" placeholder="Masuk Gng Depan" aria-label="Disabled input example">
                            </div>
                            <div>
                              <p href=""><i class="bi bi-geo-alt px-1"></i>Pilih Lokasi Kamu</p>
                              <iframe scrolling="no" marginheight="0" style="width: 100%" marginwidth="0" src="https://maps.google.com/maps?q=Jalan%20Janti%2C%20Gang%20Arjuna%2059%2C%20Karangjambe%2C%20Banguntapan%2C%20Bantul&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="%3$s" aria-label="%3$s" frameborder="0"></iframe>
                            </div>
                            <div class="cardHeader1" style="margin-top: 30px;">
                              <h6>Pilih sebagai alamat utama</h6>
                              <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                              </label>
                            </div>
                          </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#alamatBaru">Nanti</button>
                        <button type="button" class="btn btn-outline-success">Oke</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="pembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-success">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Pilih metode pembayaran</b></h5>
                        <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <a class="btn bg-white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Transfer Bank <i class="bi bi-chevron-down"></i>
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Bank BCA
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Bank BRI
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Bank MANDIRI
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Bank BNI
                                    </label>
                                </div>
                            </div> 
                        </div>
                        <div class="d-grid gap-10 d-md-block" style="margin-top: 10px">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                QRIS (Dana, Gopay)
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-outline-success" href="/user/pemesanan/qrish" role="button">Pilih</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        


   