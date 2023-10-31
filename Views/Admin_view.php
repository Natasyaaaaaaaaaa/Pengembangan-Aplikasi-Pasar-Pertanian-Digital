<!DOCTYPE html>
<html>
<head>
    <title>Data Admin</title>
</head>
<body>
    <h1>Data Admin</h1>
    <a href="<?php echo base_url('admin/create'); ?>">Tambah Admin</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($admins as $admin): ?>
            <tr>
                <td><?php echo $admin->id; ?></td>
                <td><?php echo $admin->nama; ?></td>
                <td><?php echo $admin->username; ?></td>
                <td>
                    <a href="<?php echo base_url('admin/edit/' . $admin->id); ?>">Edit</a>
                    <a href="<?php echo base_url('admin/delete/' . $admin->id); ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
