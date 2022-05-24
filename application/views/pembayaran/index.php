<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<SB-Mid-client-MhZV2qmmElAGGXYC>"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <title>Pembayaran</title>
</head>

<body>
    <div class="container mt-5">
        <br><br>
        <?= $this->session->flashdata('tambahBooking'); ?>
        <?= $this->session->flashdata('gagalBooking'); ?>
        <h2>Booking Lapang Bintang Sport</h2>


        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Order ID</th>
                    <th>Gross Amount</th>
                    <th>Payment Type</th>
                    <th>Bank</th>
                    <th>VA Number</th>
                    <th>Transaction Time</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($bookingById as $bok) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $bok['order_id']; ?></td>
                        <td align="RIGHT">Rp.<?= number_format($bok['gross_amount'], '0', '', '.'); ?></td>
                        <td><?= $bok['payment_type']; ?></td>
                        <td><?= $bok['bank']; ?></td>
                        <td><?= $bok['va_number']; ?></td>
                        <td><?= $bok['transaction_time']; ?></td>
                        <td>
                            <?php if ($bok['status_code'] == "200") : ?>
                                <span class="badge bg-success">Success</span>
                            <?php else : ?>
                                <span class="badge bg-danger">Pending</span>
                            <?php endif; ?>
                        </td>
                        <!-- <td><a href="<?= $bok['pdf_url']; ?>" target="_BLANK" class="btn btn-success btn-sm">Download</a></td> -->
                        <td><a href="<?= base_url('snap/export/pdf/') . $bok['order_id']; ?>" target="_BLANK" class="btn btn-success btn-sm"><i class="fa fa-file-pdf"></i> Invoice</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <hr>


        <form id="payment-form" method="post" action="<?= site_url() ?>/snap/finish">
            <input type="hidden" name="result_type" id="result-type" value="">
            <input type="hidden" name="result_data" id="result-data" value="">

            <!-- <label for="namaPemesan">Nama Pemesan</label> -->
            <div class="form-group">
                <input type="text" class="form-control" name="namaPemesan" id="namaPemesan" value="<?= $_SESSION['email']; ?>" hidden>
            </div>

            <label for="namaTeam">Nama Team</label>
            <div class="form-group">
                <input type="text" class="form-control" name="namaTeam" id="namaTeam">
            </div>

            <label for="noTelf">No Telfon</label>
            <div class="form-group">
                <input type="text" class="form-control" name="noTelf" id="noTelf">
            </div>

            <label for="tglMain">Tanggal Main</label>
            <div class="form-group">
                <input type="date" class="form-control" name="tglMain" id="tglMain">
            </div>



            <label for="lapangMain">Pilih Lapang</label>
            <div class="form-group">
                <select name="lapangMain" class="form-control" id="lapangMain">
                    <?php foreach ($lapang as $lap) : ?>
                        <option value="<?= $lap['kdLapang']; ?>"><?= $lap['nama_lapang']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <label for="jamMain">Pukul/Jam Main</label>
            <div class="form-group">
                <select class="form-control" name="jamMain" id="jamMain">
                    <?php foreach ($jam as $jam) : ?>
                        <option value="<?= $jam['kdJam']; ?>"><?= $jam['jam']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <label for="jmlBayar">Jumlah Bayar</label>
            <div class="form-group">
                <select class="form-control" name="jmlBayar" id="jmlBayar" disabled>

                </select>
            </div>

            <button class="btn btn-primary" id="pay-button">Booking</button>
        </form>



    </div>


    <script>
        $(document).ready(function() {
            $('#jamMain').change(function() {
                var id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('snap/getHarga') ?>",
                    data: {
                        id: id
                    },
                    dataType: "JSON",
                    success: function(response) {
                        $('#jmlBayar').html(response);
                    }
                })
            })
        })
    </script>




    <script type="text/javascript">
        $('#pay-button').click(function(event) {
            event.preventDefault();
            $(this).attr("disabled", "disabled");

            var namaPemesan = $("#namaPemesan").val();
            var namaTeam = $("#namaTeam").val();
            var noTelf = $("#noTelf").val();
            var tglMain = $("#tglMain").val();
            var lapangMain = $("#lapangMain").val();
            var jamMain = $("#jamMain").val();
            var jmlBayar = $("#jmlBayar").val();


            $.ajax({
                type: 'POST',
                url: '<?= site_url() ?>/snap/token',
                data: {
                    namaPemesan: namaPemesan,
                    namaTeam: namaTeam,
                    noTelf: noTelf,
                    tglMain: tglMain,
                    lapangMain: lapangMain,
                    jamMain: jamMain,
                    jmlBayar: jmlBayar
                },
                cache: false,

                success: function(data) {
                    //location = data;

                    console.log('token = ' + data);

                    var resultType = document.getElementById('result-type');
                    var resultData = document.getElementById('result-data');

                    function changeResult(type, data) {
                        $("#result-type").val(type);
                        $("#result-data").val(JSON.stringify(data));
                        //resultType.innerHTML = type;
                        //resultData.innerHTML = JSON.stringify(data);
                    }

                    snap.pay(data, {

                        onSuccess: function(result) {
                            changeResult('success', result);
                            console.log(result.status_message);
                            console.log(result);
                            $("#payment-form").submit();
                        },
                        onPending: function(result) {
                            changeResult('pending', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                        },
                        onError: function(result) {
                            changeResult('error', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>