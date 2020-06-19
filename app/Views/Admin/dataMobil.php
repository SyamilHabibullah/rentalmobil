<?= $this->extend('TemplateAdmin/template'); ?>
<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Mobil</h1>
        </div>
        <a href="" class="btn btn-sm btn-primary mb-4">
            Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">gambar</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Merk</th>
                    <th scope="col">No.Plat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($datamobil as $k) : ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><img src="/img/<?= $k['gambar']; ?>" class="sampul"></td>
                        <td><?= $k['kode_tipe']; ?></td>
                        <td><?= $k['merk']; ?></td>
                        <td><?= $k['nmr_plat']; ?></td>
                        <td>
                            <?php
                            if ($k['status'] == "0") {
                                echo " <span class='badge badge-danger'>tidak tersedia</span>";
                            } else {
                                echo " <span class='badge badge-primary'>tersedia</span>";
                            }
                            ?>
                        </td>
                        <td><a href="" class="btn btn-sm btn-success">
                                <i class="fas fa-eye"></i></a>
                            <a href="" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i></a>
                            <a href="" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>
<?= $this->endSection(); ?>