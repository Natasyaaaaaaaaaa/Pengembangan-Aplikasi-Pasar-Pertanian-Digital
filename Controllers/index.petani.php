<!DOCTYPE html>
<html>
<head>
    <title>Petani List</title>
</head>
<body>
    <h1>Petani List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Petani</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No. Telp</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($petanis as $petani): ?>
                <tr>
                    <td><?php echo $petani->id_petani; ?></td>
                    <td><?php echo $petani->nama_petani; ?></td>
                    <td><?php echo $petani->email; ?></td>
                    <td><?php echo $petani->alamat; ?></td>
                    <td><?php echo $petani->no_telp; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
