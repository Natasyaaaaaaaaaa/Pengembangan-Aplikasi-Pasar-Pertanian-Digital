<!DOCTYPE html>
<html>
<head>
    <title>Data Pembeli</title>
</head>
<body>
    <h1>Data Pembeli</h1>
    <a href="<?php echo base_url('pembeli/create'); ?>">Tambah Pembeli</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($pembeli as $row): ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td>
                    <a href="<?php echo base_url('pembeli/edit/' . $row->id); ?>">Edit</a>
                    <a href="<?php echo base_url('pembeli/delete/' . $row->id); ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
