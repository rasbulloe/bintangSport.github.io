<!-- Begin Page Content -->
<main class="page shooping-cart-page">
    <div class="container-fluid">
        <h3 class="text-dark mb-4"><?= $title; ?></h3>
        <div class="card shadow">
            <div class="card-header">
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>

                <?= $this->session->flashdata('tambahBooking'); ?>
                <?= $this->session->flashdata('gagalBooking'); ?>

                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newPesananModal"><i class="fas fa-plus"></i>Add New Booking</a>
                <!-- <input type="submit" class="btn btn-warning btn-sm" value="Filter"></input>
                <a href="" class="btn btn-success btn-sm"><i class="fas fa-file"></i>Export PDF</a> -->
            </div>

            <div class="card-body">
                <div class="table-responsive table mt-2" id="dataTables" role="grid">
                    <br>
                    <table class="table dataTable my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode Transaksi</th>
                                <th scope="col">Tanggal Main</th>
                                <th scope="col">Lapang</th>
                                <th scope="col">Jam Main</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($booking as $bok) : ?>
                                <tr>
                                    <th scope="row"><?= ++$start; ?></th>
                                    <td><?= $bok['order_id']; ?></td>
                                    <td><?= $bok['tglJadwal']; ?></td>
                                    <td><?= $bok['nama_lapang']; ?></td>
                                    <td><?= $bok['jam']; ?> WIB</td>
                                    <td>Rp.<?= $bok['harga']; ?> </td>
                                    <td>
                                        <?php if ($bok['status_code'] == "200") : ?>
                                            <span class="badge badge-success">Lunas</span>
                                        <?php elseif ($bok['status_code'] == "201") : ?>
                                            <span class="badge badge-sm badge-warning">Pending</span>
                                        <?php else : ?>
                                            <span class="badge badge-sm badge-danger">DP</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('booking/lunas/') . $bok['order_id']; ?>" type="button" class="btn btn-outline-secondary">
                                            <i class="far fa-calendar-check"></i>
                                            <span class="visually-hidden"></span>
                                        </a>
                                        <a href="<?= base_url('booking/batal/') . $bok['order_id']; ?>" type="button" class="btn btn-outline-secondary" onclick="return confirm('yakin?')"><i class="fas fa-ban"></i></a>
                                        <a href="<?= base_url('booking/detail/') . $bok['order_id']; ?>" type="button" class="btn btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <!-- <?= $this->pagination->create_links(); ?> -->


                </div>
            </div>



        </div>
        <!-- /.container-fluid -->



    </div>
    <!-- End of Main Content -->

    <!-- Modal Tambah Pesanan-->
    <div class="modal" tabindex="-1" role="dialog" id="newPesananModal" aria-labelledby="newPesananModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newPesananModalLabel">Tambah Data Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('booking/tambahPesanan'); ?>
                <div class="modal-body">
                    <!-- <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="kodetransaksi" name="kodetransaksi" placeholder="Tanggal Invoice" value="<?= $invoice; ?>" disabled>
                    </div> -->
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="tglInvoice" name="tglInvoice" placeholder="Tanggal Invoice" value="<?= date('d-m-Y'); ?>" hidden>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="namaPemesan" name="namaPemesan" placeholder="Nama Pemesan">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="namaTeam" name="namaTeam" placeholder="Nama Team">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="kontak" name="kontak" placeholder="No Telfon">
                    </div>
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="tglJadwal" name="tglJadwal" placeholder="Tanggal Main">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="jamMain">Options</label>
                        </div>
                        <select class="custom-select" id="jamMain" name="jamMain">
                            <option selected>Jam Main</option>
                            <?php foreach ($jam as $j) : ?>
                                <option value="<?= $j['kdJam'] ?>"><?= $j['jam'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="lapangMain">Options</label>
                        </div>
                        <select class="custom-select" id="lapangMain" name="lapangMain">
                            <option selected>Lapang ..</option>
                            <?php foreach ($lapang as $l) : ?>
                                <option value="<?= $l['kdLapang'] ?>"><?= $l['nama_lapang'] ?></option>
                            <?php endforeach; ?>
                        </select>
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