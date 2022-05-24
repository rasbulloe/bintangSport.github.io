<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <style type="text/css">
        /* -------------------------------------
    GLOBAL
    A very basic CSS reset
------------------------------------- */
        * {
            margin: 0;
            padding: 0;
            font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
            box-sizing: border-box;
            font-size: 14px;
        }

        img {
            max-width: 100%;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100% !important;
            height: 100%;
            line-height: 1.6;
        }

        /* Let's make sure all tables have defaults */
        table td {
            vertical-align: top;
        }

        /* -------------------------------------
    BODY & CONTAINER
------------------------------------- */
        body {
            background-color: #f6f6f6;
        }

        .body-wrap {
            background-color: #f6f6f6;
            width: 100%;
        }

        .container {
            display: block !important;
            max-width: 600px !important;
            margin: 0 auto !important;
            /* makes it centered */
            clear: both !important;
        }

        .content {
            max-width: 600px;
            margin: 0 auto;
            display: block;
            padding: 20px;
        }

        /* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */
        .main {
            background: #fff;
            border: 1px solid #e9e9e9;
            border-radius: 3px;
        }

        .content-wrap {
            padding: 20px;
        }

        .content-block {
            padding: 0 0 20px;
        }

        .header {
            width: 100%;
            margin-bottom: 20px;
        }

        .footer {
            width: 100%;
            clear: both;
            color: #999;
            padding: 20px;
        }

        .footer a {
            color: #999;
        }

        .footer p,
        .footer a,
        .footer unsubscribe,
        .footer td {
            font-size: 12px;
        }

        /* -------------------------------------
    TYPOGRAPHY
------------------------------------- */
        h1,
        h2,
        h3 {
            font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            color: #000;
            margin: 40px 0 0;
            line-height: 1.2;
            font-weight: 400;
        }

        h1 {
            font-size: 32px;
            font-weight: 500;
        }

        h2 {
            font-size: 24px;
        }

        h3 {
            font-size: 18px;
        }

        h4 {
            font-size: 14px;
            font-weight: 600;
        }

        p,
        ul,
        ol {
            margin-bottom: 10px;
            font-weight: normal;
        }

        p li,
        ul li,
        ol li {
            margin-left: 5px;
            list-style-position: inside;
        }

        /* -------------------------------------
    LINKS & BUTTONS
------------------------------------- */
        a {
            color: #1ab394;
            text-decoration: underline;
        }

        .btn-primary {
            text-decoration: none;
            color: #FFF;
            background-color: #1ab394;
            border: solid #1ab394;
            border-width: 5px 10px;
            line-height: 2;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 5px;
            text-transform: capitalize;
        }

        /* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .aligncenter {
            text-align: center;
        }

        .alignright {
            text-align: right;
        }

        .alignleft {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        /* -------------------------------------
    ALERTS
    Change the class depending on warning email, good email or bad email
------------------------------------- */
        .alert {
            font-size: 16px;
            color: #fff;
            font-weight: 500;
            padding: 20px;
            text-align: center;
            border-radius: 3px 3px 0 0;
        }

        .alert a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
        }

        .alert.alert-warning {
            background: #f8ac59;
        }

        .alert.alert-bad {
            background: #ed5565;
        }

        .alert.alert-good {
            background: #1ab394;
        }

        /* -------------------------------------
    INVOICE
    Styles for the billing table
------------------------------------- */
        .invoice {
            margin: 40px auto;
            text-align: left;
            width: 80%;
        }

        .invoice td {
            padding: 5px 0;
        }

        .invoice .invoice-items {
            width: 100%;
        }

        .invoice .invoice-items td {
            border-top: #eee 1px solid;
        }

        .invoice .invoice-items .total td {
            border-top: 2px solid #333;
            border-bottom: 2px solid #333;
            font-weight: 700;
        }

        /* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */
        @media only screen and (max-width: 640px) {

            h1,
            h2,
            h3,
            h4 {
                font-weight: 600 !important;
                margin: 20px 0 5px !important;
            }

            h1 {
                font-size: 22px !important;
            }

            h2 {
                font-size: 18px !important;
            }

            h3 {
                font-size: 16px !important;
            }

            .container {
                width: 100% !important;
            }

            .content,
            .content-wrap {
                padding: 10px !important;
            }

            .invoice {
                width: 100% !important;
            }
        }
    </style>
</head>

<body>

    <table class="body-wrap">
        <tbody>
            <tr>
                <td></td>
                <td class="container" width="600">
                    <div class="content">
                        <table class="main" width="100%" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td class="content-wrap aligncenter">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td class="content-block">
                                                        <center>
                                                            <img src="<?= base_url(); ?>/assets/img/logoKecil.jpg" alt="">
                                                            <h2>Bintang Sport</h2>
                                                            <h3>Terima Kasih sudah Memesan Lapang</h3>
                                                        </center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="content-block">
                                                        <table class="invoice">
                                                            <tbody>
                                                                <tr>
                                                                    <td><?= $invoice['namaPemesan']; ?><br><?= $invoice['kontak']; ?><br>Invoice #<?= $invoice['order_id']; ?><br><?= $invoice['transaction_time']; ?><br><?= $invoice['payment_type'] . ' ' . $invoice['bank'] ?><br> Team <?= $invoice['userBoking']; ?><br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Tanggal Main</td>
                                                                                    <td class="alignright"><?= $invoice['tglJadwal']; ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Pukul/Jam Main</td>
                                                                                    <td class="alignright"><?= $invoice['jam']; ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td class="alignright"><?= $invoice['nama_lapang']; ?></td>
                                                                                </tr>
                                                                                <tr class="total">
                                                                                    <td class="alignright" width="80%">Total</td>
                                                                                    <td class="alignright"><?= $invoice['harga']; ?></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="content-block">
                                                        <center>Bintang Sport. Jl. Kebon Kopi, Cibeureum, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40535</center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="footer">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td class="aligncenter content-block">Ada pertanyaa? Whatsapp <a href="">085711470765</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>





    <!-- <div class="container mt-3">

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
                                    <td><?= $invoice['order_id']; ?></td>
                                </tr>
                                <tr>
                                    <th>Total Bayar</th>
                                    <td>Rp.<?= $invoice['harga'] ?></td>
                                </tr>
                                <tr>
                                    <th>Pembayaran</th>
                                    <td><?= $invoice['payment_type'] ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Transaksi</th>
                                    <td><?= $invoice['transaction_time'] ?></td>
                                </tr>
                                <tr>
                                    <th>Bank</th>
                                    <td><?= $invoice['bank'] ?></td>
                                </tr>
                                <tr>
                                    <th>Pemesan</th>
                                    <td><?= $invoice['namaPemesan']; ?></td>
                                </tr>
                                <tr>
                                    <th>No.Telp</th>
                                    <td><?= $invoice['kontak']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Team</th>
                                    <td><?= $invoice['userBoking']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Main</th>
                                    <td><?= $invoice['tglJadwal']; ?></td>
                                </tr>
                                <tr>
                                    <th>Lapang</th>
                                    <td><?= $invoice['nama_lapang']; ?></td>
                                </tr>
                                <tr>
                                    <th>Jam Main</th>
                                    <td><?= $invoice['jam']; ?></td>
                                </tr>
                                <tr>
                                    <th>Status Pembayaran</th>
                                    <td>
                                        <?php if ($invoice['status_code'] == "201") : ?>
                                            Pending
                                        <?php elseif ($invoice['status_code'] == "200") : ?>
                                            Lunas
                                        <?php else : ?>
                                            DP
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status Main</th>
                                    <td>
                                        <?php if ($invoice['tglJadwal'] <= date('Y-m-d')) : ?>
                                            Selesai.
                                        <?php else : ?>
                                            Belum main
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
</body>

</html>