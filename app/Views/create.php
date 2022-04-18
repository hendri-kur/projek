<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="small-box bg-primary">
                <div class="inner">
                    <center>
                        <h7>Form Tambah Data Mahasiswa</h7>
                    </center>
                </div>
            </div>
            <form action="<?= base_url('/mahasiswa/save') ?>" method="POST">
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="npm" class="col-sm-2 col-form-label">NPM</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : ''; ?>" id="npm" name="npm" autofocus value="<?= old('npm'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('npm'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="universitas" class="col-sm-2 col-form-label">Universitas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('universitas')) ? 'is-invalid' : ''; ?>" id="universitas" name="universitas" autofocus value="<?= old('universitas'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('universitas'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lokasi_pkl" class="col-sm-2 col-form-label">Tempat PKL</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="lokasi_pkl" name="lokasi_pkl">
                            <option value="kerapu">Kerapu</option>
                            <option value="kakap">Kakap</option>
                            <option value="bawal bintang">Bawal Bintang</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="created_at" class="col-sm-2 col-form-label">Mulai PKL</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control <?= ($validation->hasError('created_at')) ? 'is-invalid' : ''; ?> " id="created_at" name="created_at" autofocus value="<?= old('created_at'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('created_at'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="selesai" class="col-sm-2 col-form-label">Selesai PKL</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control  <?= ($validation->hasError('selesai')) ? 'is-invalid' : ''; ?>" id="selesai" name="selesai" autofocus value="<?= old('selesai'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('selesai'); ?>
                        </div>
                    </div>
                </div>


                <div class="container mt-4 ">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('mahasiswa') ?>" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>