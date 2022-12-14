
@extends('layouts.dashboard_vendor')

<!--hero section-->
@section('container')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Atur alamat </h2>
            </div>
        </div>
    <div class="">
        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-Kensaraan/kelola_kendaraanstep1" style="text-decoration:none">
                        <div class="cardName1">Kendaraan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card2">
                <div>
                    <a href="Vendor/Kelola-Bangunan/kelola_bangunanstep1" style="text-decoration:none">
                        <div class="cardName2">Bangunan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola_Barang/kelola_barangstep1" style="text-decoration:none">
                        <div class="cardName1">Barang
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-PickUp/kelola_pickupstep1" style="text-decoration:none">
                        <div class="cardName1">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>
    
    
        <div class="container mb-5 " style="width: 800px">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Atur Alamat</h5>
                <hr width="100%" color="#c0c0c0">
                <form action="">
                  <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label"><b>Alamat</b><p>Isikan alamat vendor Anda dibawah ini</p></label>
                      <input class="form-control text-center" type="text" placeholder="Pilih lokasi Anda" disabled  data-bs-toggle="modal" data-bs-target="#exampleModal">
                  </div>
                  
              
                 <div class="col-md-12">
                     <label for="inputState" class="form-label">Provinsi</label>
                        <select id="inputState" class="form-select">
                          <option selected>Pilih provinsi</option>
                          <option>DKI Jakarta</option>
                          <option>Jawa Barat</option>
                          <option>Jawa Tengah</option>
                          <option>DI Yogyakarta</option>
                          <option>Jawa Timur</option>
                          <option>Kalimantan Timur</option>

                        </select>
                      </div>

                      <div class="col-md-12">
                        <label for="inputState" class="form-label">Kabupaten</label>
                        <select id="inputState" class="form-select">
                          <option selected>Pilih Kabupaten</option>
                          <option>Bantul</option>
                          <option>Sleman</option>
                          <option>Kulon Progo</option>
                          <option>Gunung Kidul</option>
                          <option>Kota Yogyakarta</option>

                        </select>
                      </div>
                      
                      <div class="col-md-12">
                        <label for="inputState" class="form-label">Kecamatan</label>
                        <select id="inputState" class="form-select">
                          <option selected>Pilih Kecamatan</option>
                          <option>Baguntapan</option>
                          <option>Bambanglipuro</option>
                          <option>Bantul</option>
                          <option>Dlingo</option>
                          <option>Imogiri</option>
                          <option>Jetis</option>
                          <option>Kasihan</option>
                          <option>Kretek</option>
                          <option>Pajangan</option>
                          <option>Pandak</option>
                          <option>Piyungan</option>
                          <option>Pundong</option>
                          <option>Sanden</option>
                          <option>Sedayu</option>
                          <option>Sewon</option>
                          <option>Srandakan</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Catatan</label>
                        <p><small class="text-muted">Deskripsikan patokan agar layanan bangunan anda
                            mudah ditemukan (opsional)</small></p>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                
                      <a href="/Vendor/Kelola-Bangunan/layanan_step2"><button type="button" class="btn btn-success col-md-12 mt-3">Selanjutnya</button></a>
                </form>
            </div>
          </div>
         
        </div>
    
</div>             
    <!-- Modal pilih alamat-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pilih alamat </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="embed-responsive embed-responsive-1by1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63245.97055414067!2d110.37484495000001!3d-7.803250450000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x21723fd4d3684f71!2sYogyakarta%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1659314278527!5m2!1sid!2sid"
                 width="420" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" disabled ></iframe>
            </div>
        </div>
        <div class="modal-footer">
          <a href="/Vendor/Kelola-Bangunan/atur_alamat"  class="btn btn-success col-sm-12">Simpan</a>
        </div>
      </div>
    </div>
  </div>       
    
</section>
@endsection