<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <h1>Đây là trang chủ</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>Email</th>
        </tr>
        <?php foreach($dataUser as $item): ?>
        <tr>
            <td><?= $user['id']?></td>
            <td><?= $user['name']?></td>
            <td><?= $user['email']?></td>
            <td>
                <a href=" <?php ?>">xem chi tiết</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>