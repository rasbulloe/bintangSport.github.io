<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head><body><table>
        <tr>
            <th>No.</th>
            <th>Tgl Pesan</th>
            <th>Nama Team</th>
            <th>Metode Pembayaran</th>
            <th>Total Bayar</th>
        </tr>
        <?php $no = 1;
        foreach ($sewa as $s) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $s['tglJadwal'] ?></td>
                <td><?= $s['userBoking'] ?></td>
                <td><?= $s['payment_type'] ?></td>
                <td><?= $s['gross_amount'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body></html>