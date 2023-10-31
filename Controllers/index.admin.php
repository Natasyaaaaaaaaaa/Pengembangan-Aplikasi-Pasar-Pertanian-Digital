<!DOCTYPE html>
<html>
<head>
    <title>Admin List</title>
</head>
<body>
    <h1>Admin List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($admins as $admin): ?>
                <tr>
                    <td><?php echo $admin->id_admin; ?></td>
                    <td><?php echo $admin->email; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
