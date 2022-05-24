<div class="container mt-3">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h5>Detail Booking</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered no-margin">
                        <tbody>

                            <tr>
                                <th>Invoice</th>
                                <td><?= $view['order_id']; ?></td>
                            </tr>
                            <tr>
                                <th>Total Bayar</th>
                                <td>Rp.<?= $view['harga'] ?></td>
                            </tr>
                            <tr>
                                <th>Pembayaran</th>
                                <td><?= $view['payment_type'] ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Transaksi</th>
                                <td><?= $view['transaction_time'] ?></td>
                            </tr>
                            <tr>
                                <th>Bank</th>
                                <td><?= $view['bank'] ?></td>
                            </tr>
                            <tr>
                                <th>Pemesan</th>
                                <td><?= $view['namaPemesan']; ?></td>
                            </tr>
                            <tr>
                                <th>No.Telp</th>
                                <td><?= $view['kontak']; ?></td>
                            </tr>
                            <tr>
                                <th>Nama Team</th>
                                <td><?= $view['userBoking']; ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Main</th>
                                <td><?= $view['tglJadwal']; ?></td>
                            </tr>
                            <tr>
                                <th>Lapang</th>
                                <td><?= $view['nama_lapang']; ?></td>
                            </tr>
                            <tr>
                                <th>Jam Main</th>
                                <td><?= $view['jam']; ?></td>
                            </tr>
                            <tr>
                                <th>Status Pembayaran</th>
                                <td>
                                    <?php if ($view['status_code'] == "201") : ?>
                                        Pending
                                    <?php elseif ($view['status_code'] == "200") : ?>
                                        Lunas
                                    <?php else : ?>
                                        DP
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Status Main</th>
                                <td>
                                    <?php if ($view['tglJadwal'] <= date('Y-m-d')) : ?>
                                    Selesai.
                                    <?php else : ?>
                                    Belum main
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="" class="btn btn-primary">Unduh</a>
                    <a href="<?= base_url() ?>/booking" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>