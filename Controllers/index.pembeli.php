<!DOCTYPE html>
<html>
<head>
    <title>Pembeli List</title>
</head>
<body>
    <h1>Pembeli List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pembelis as $pembeli): ?>
                <tr>
                    <td><?php echo $pembeli->id_pembeli; ?></td>
                    <td><?php echo $pembeli->nama_pembeli; ?></td>
                    <td><?php echo $pembeli->alamat; ?></td>
                    <td><?php echo $pembeli->no_telp; ?></td>
                    <td><?php echo $pembeli->email; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
