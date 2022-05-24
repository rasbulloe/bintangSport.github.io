<main class="page shooping-cart-page">
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Laporan Pemesanan</h3>
        <div class="card shadow">
            <div class="card-header py-3">
                <a href="<?= base_url('Laporan/print') ?>" class="btn btn-info btn-sm"><i class="fas fa-print"></i>Print</a>
                <a href="<?= base_url('laporan/pdf'); ?>" class="btn btn-success btn-sm"><i class="fas fa-file"></i>Export PDF</a>
            </div>
            <div class="card-body">
                <?= form_open_multipart('laporan'); ?>

                <div class="row">
                    <div class="col-lg-3">
                        <input type="date" class="form-control" name="awalTgl" id="awalTgl">
                    </div>
                    <label for="">-</label>
                    <div class="col-lg-3">
                        <input type="date" class="form-control" name="akhirTgl" id="akhirTgl">
                    </div>
                    <div class="col-lg-3">
                        <!-- <input type="submit" value="Tampilkan"> -->
                        <input type="submit" class="btn btn-dark btn-sm" value="Submit"></input>
                        <!-- <a href="<?= base_url('laporan/export'); ?>" class="btn btn-success btn-sm"><i class="fas fa-file"></i>Export PDF</a> -->
                    </div>
                </div>



                <?= form_close(); ?>
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>

                <div class="table-responsive table mt-2" id="dataTables" role="grid">
                    <table class="table dataTable my-0" id="dataTables">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>No Pesanan</th>
                                <th>Tgl Pesanan</th>
                                <th>Nama Member</th>
                                <th>Metode Bayar</th>
                                <th>Status Bayar</th>
                                <th>Total Bayar</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 1; ?>
                            <?php $total = 0; ?>
                            <?php foreach ($laporan as $lapor) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td>INV-<?= $lapor['order_id'] ?></td>
                                    <td><?= $lapor['tglJadwal'] ?></td>
                                    <td><?= $lapor['userBoking'] ?></td>
                                    <td><?= $lapor['payment_type'] ?></td>
                                    <td><?php if ($lapor['status_code'] == "200") : ?>
                                            <span class="badge badge-success">Lunas</span>
                                        <?php elseif ($lapor['status_code'] == "201") : ?>
                                            <span class="badge badge-sm badge-warning">Pending</span>
                                        <?php else : ?>
                                            <span class="badge badge-sm badge-danger">DP</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>Rp.<?= $lapor['harga'] ?></td>
                                    <?php $total += $lapor['harga'] ?>
                                </tr>
                            <?php endforeach; ?>
                            <!-- <label for=""> <?= $total; ?></label> -->

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</main>