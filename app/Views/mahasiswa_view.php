<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <center>
                            <h7>Data Mahasiswa PKL BBPBL Lampung</h7>
                        </center>
                    </div>
                </div>

                <div class="container mt-3 mb-3 ">
                    <a href="<?= base_url("mahasiswa/create/") ?>" class="btn btn-primary">+Tambah Data</a>

                    <?php if (session()->getFlashdata('pesan')) ?>
                    <div class="alert alert-succes" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                    <?php T_ENDIF ?>


                    <form action="" method="get">
                        <div class="input-group mt-3 mb-3">
                            <input type="text" class="form-control" value="<?php echo $katakunci ?>" name="katakunci" placeholder="Masukan kata kunci" aria-label="Masukan kata kunci" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">search</button>
                        </div>
                    </form>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Universitas</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($mahasiswa as $m) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $m['nama']; ?></td>
                                <td><?= $m['npm']; ?></td>
                                <td><?= $m['universitas']; ?></td>
                                <td>
                                    <a href="<?= base_url("mahasiswa/detail/" . $m['id']) ?>" class="btn btn-success">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>