<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Penghasilan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp " . number_format($tot_penghasilan, 2, ',', '.'); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Pemesanan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $tot_pesanan; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Pelanggan
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $tot_pelanggan; ?></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 2%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Booking</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pesanan_pending; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Jadwal Lapang</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>

                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Tanggal <?= date("d-M-Y") ?></label>
                        <?php echo form_open('admin') ?>
                        <div class=" input-group col-lg-3">
                            <input type="date" class="form-control" name="keywordTgl" id="keywordTgl">
                            <button type="submit" class="btn btn-success">Cari</button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Pukul/Jam</th>
                                <th scope="col">Lapang 1</th>
                                <th scope="col">Lapang 2</th>
                                <th scope="col">Lapang 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">09.00</th>
                                <td>
                                    <?php if ($cari11) : ?>
                                        <span class="badge bg-success"> <?= $cari11['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari12) : ?>
                                        <span class="badge bg-success"> <?= $cari12['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari13) : ?>
                                        <span class="badge bg-success"> <?= $cari13['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10.00</th>
                                <td>
                                    <?php if ($cari21) : ?>
                                        <span class="badge bg-success"> <?= $cari21['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php if ($cari22) : ?>
                                        <span class="badge bg-success"> <?= $cari22['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php if ($cari23) : ?>
                                        <span class="badge bg-success"> <?= $cari23['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">11.00</th>
                                <td>
                                    <?php if ($cari31) : ?>
                                        <span class="badge bg-success"> <?= $cari31['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari32) : ?>
                                        <span class="badge bg-success"> <?= $cari32['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php if ($cari33) : ?>
                                        <span class="badge bg-success"> <?= $cari33['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">12.00</th>
                                <td>
                                    <?php if ($cari41) : ?>
                                        <span class="badge bg-success"> <?= $cari41['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari42) : ?>
                                        <span class="badge bg-success"> <?= $cari42['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php if ($cari43) : ?>
                                        <span class="badge bg-success"> <?= $cari43['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">13.00</th>
                                <td>
                                    <?php if ($cari51) : ?>
                                        <span class="badge bg-success"> <?= $cari51['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari52) : ?>
                                        <span class="badge bg-success"> <?= $cari52['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php if ($cari53) : ?>
                                        <span class="badge bg-success"> <?= $cari53['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">14.00</th>
                                <td><?php if ($cari61) : ?>
                                        <span class="badge bg-success"> <?= $cari61['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari62) : ?>
                                        <span class="badge bg-success"> <?= $cari62['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari63) : ?>
                                        <span class="badge bg-success"> <?= $cari63['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">15.00</th>
                                <td><?php if ($cari71) : ?>
                                        <span class="badge bg-success"> <?= $cari71['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari72) : ?>
                                        <span class="badge bg-success"> <?= $cari72['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php if ($cari73) : ?>
                                        <span class="badge bg-success"> <?= $cari73['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">16.00</th>
                                <td><?php if ($cari81) : ?>
                                        <span class="badge bg-success"> <?= $cari81['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari82) : ?>
                                        <span class="badge bg-success"> <?= $cari82['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari83) : ?>
                                        <span class="badge bg-success"> <?= $cari83['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">17.00</th>
                                <td><?php if ($cari91) : ?>
                                        <span class="badge bg-success"> <?= $cari91['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari92) : ?>
                                        <span class="badge bg-success"> <?= $cari92['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari93) : ?>
                                        <span class="badge bg-success"> <?= $cari93['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">18.00</th>
                                <td><?php if ($cari101) : ?>
                                        <span class="badge bg-success"> <?= $cari101['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari102) : ?>
                                        <span class="badge bg-success"> <?= $cari102['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php if ($cari103) : ?>
                                        <span class="badge bg-success"> <?= $cari103['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">19.00</th>
                                <td><?php if ($cari111) : ?>
                                        <span class="badge bg-success"> <?= $cari111['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari112) : ?>
                                        <span class="badge bg-success"> <?= $cari112['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php if ($cari113) : ?>
                                        <span class="badge bg-success"> <?= $cari113['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">20.00</th>
                                <td><?php if ($cari121) : ?>
                                        <span class="badge bg-success"> <?= $cari121['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari122) : ?>
                                        <span class="badge bg-success"> <?= $cari122['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php if ($cari123) : ?>
                                        <span class="badge bg-success"> <?= $cari123['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">21.00</th>
                                <td><?php if ($cari131) : ?>
                                        <span class="badge bg-success"> <?= $cari131['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($cari132) : ?>
                                        <span class="badge bg-success"> <?= $cari132['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php if ($cari133) : ?>
                                        <span class="badge bg-success"> <?= $cari133['userBoking']; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-white">Kosong</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->