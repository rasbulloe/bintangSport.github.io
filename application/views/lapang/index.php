<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newLapangModal">Add New Lapang</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Lapang</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($lapang as $lap) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $lap['nama_lapang']; ?></td>
                            <td><?= $lap['deskripsi']; ?></td>
                            <td><?= $lap['gambar']; ?></td>
                            <td>
                                <a href="" class="badge badge-primary" data-toggle="modal" data-target="#editLapangModal<?= $lap['kdLapang']; ?>"> Edit</a>
                                <a href="<?= base_url('lapang/hapus/') . $lap['kdLapang']; ?>" class="badge badge-danger" onclick="return confirm('yakin?')">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->

<!-- Modal new-->
<div class="modal" tabindex="-1" role="dialog" id="newLapangModal" aria-labelledby="newLapangModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newLapangModalLabel">Tambah Data Lapang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('lapang/tambah'); ?>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="nama_lapang" name="nama_lapang" placeholder="Nama Lapang">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="deskripsi" name="deskripsi" placeholder="Deskripsi Lapang">
                </div>
                <div class="form-group mb-3">
                    <label>Gambar Lapang</label>
                    <input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="gambar" name="gambar" placeholder="Nama Lapang">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>

<!-- Modal -->

<!-- Modal Edit-->
<?php foreach ($lapang as $lap) { ?>
    <div class="modal" tabindex="-1" role="dialog" id="editLapangModal<?= $lap['kdLapang']; ?>" aria-labelledby="editLapangModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLapangModalLabel">Ubah Data Lapang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('lapang/edit/') . $lap['kdLapang'] ?>" method="POST">
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="nama_lapang" name="nama_lapang" value="<?= $lap['nama_lapang'] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="deskripsi" name="deskripsi" value="<?= $lap['deskripsi']; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="gambar" name="gambar" value="<?= $lap['gambar']; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>