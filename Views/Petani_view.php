<!DOCTYPE html>
<html>
<head>
    <title>Data Petani</title>
</head>
<body>
    <h1>Data Petani</h1>
    <a href="<?php echo base_url('petani/tambah'); ?>">Tambah Petani</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($petani as $row): ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td>
                    <a href="<?php echo base_url('petani/edit/' . $row->id); ?>">Edit</a>
                    <a href="<?php echo base_url('petani/hapus/' . $row->id); ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
