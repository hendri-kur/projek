<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="small-box bg-primary">
                <div class="inner">
                    <center>
                        <h7>Profil Mahasiswa PKL BBPBL Lampung</h7>
                    </center>
                </div>
            </div>
            <div class="infos">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <b>Nama</b> : <?= $data["nama"] ?></li>
                    <li class="list-group-item"><b>NPM</b> : <?= $data["npm"] ?></li>
                    <li class="list-group-item"><b>Universitas</b> : <?= $data["universitas"] ?></li>
                    <li class="list-group-item"><b>Tempat PKL</b> : <?= $data["lokasi_pkl"] ?></li>
                    <li class="list-group-item"><b>Mulai PKL </b>: <?= $data["created_at"] ?></li>
                    <li class="list-group-item"><b>Selesai PKL </b>: <?= $data["selesai"] ?></li>
                </ul>
                <div class="container mt-4 ">
                    <a href="<?= base_url('mahasiswa') ?>" class="btn btn-success">Kembali</a>
                    <a href="<?= base_url('mahasiswa/edit/') ?> " class="btn btn-warning">Edit</a>
                    <a href="<?= base_url("mahasiswa/delete/") ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
</div>