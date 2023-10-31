<!DOCTYPE html>
<html>
<head>
    <title>Pesanan List</title>
</head>
<body>
    <h1>Pesanan List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pembeli</th>
                <th>Nama Petani</th>
                <th>Nama Produk</th>
                <th>Alamat Tujuan</th>
                <th>Alamat Pengirim</th>
                <th>Info</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pesanans as $pesanan): ?>
                <tr>
                    <td><?php echo $pesanan->id_pesanan; ?></td>
                    <td><?php echo $pesanan->nama_pembeli; ?></td>
                    <td><?php echo $pesanan->nama_petani; ?></td>
                    <td><?php echo $pesanan->nama_produk; ?></td>
                    <td><?php echo $pesanan->alamat_tujuan; ?></td>
                    <td><?php echo $pesanan->alamat_pengirim; ?></td>
                    <td><?php echo $pesanan->info; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
