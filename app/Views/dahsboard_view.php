<div class="container-fluid">
  <div class="small-box bg-primary">
    <div class="inner">
      <center>
        <h4>Sistem Pendataan Mahasiswa PKL BBPBL Lampung</h4>
      </center>
    </div>
  </div>
  <div class="small-box bg-secondary">
    <div class="inner">
      <h7>Selamat Datang <?php echo session()->get('admin_username') ?>,anda Login Sebagai Admin</h7>
    </div>
  </div>
</div>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h3>150</h3>

            <p>Mahasiswa</p>
          </div>
          <div class="icon">
            <i class="fa fa-address-book" style="font-size:48px"></i>
          </div>
          <a href="<?= base_url('mahasiswa') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>

            <p>Lokasi PKL</p>
          </div>
          <div class="icon">
            <i class="fas fa-map-marker-alt' style='font-size:48px"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44</h3>

            <p>Admin</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>65</h3>

            <p>Profil Instansi</p>
          </div>
          <div class="icon">
            <i class="fas fa-university' style='font-size:48px"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
  </div>
</section>
<!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->


<section class="content">
  <div class="container-fluid">

    <!-- Map card -->
    <div class="card bg-gradient-primary">
      <div class="embed-responsive embed-responsive-21by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.260738898388!2d105.2460740147658!3d-5.528282595991477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40d875d907de1f%3A0x56b27e7531633ce0!2sBalai%20Besar%20Perikanan%20Budidaya%20Laut%20Lampung!5e0!3m2!1sid!2sid!4v1649587772620!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
</section>