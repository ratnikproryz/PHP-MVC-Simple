<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>
    <div class="d-flex align-items-center justify-content-center">
        <div class="pt-5 w-50">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr class="text-center ">
                        <th>Mã khoa</th>
                        <th>Tên khoa</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['departments'] as $department) { ?>
                        <tr class="text-center">
                            <td> <?php echo $department["makhoa"]; ?></td>
                            <td> <?php echo $department["tenkhoa"]; ?></td>
                            <td>
                                <div class="right">
                                    <a class="btn btn-danger" href="index.php?action=delete&id=<?php echo $department["makhoa"]; ?>">
                                        Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="./views/create.php">Thêm khoa mới</a>
        </div>
    </div>

</body>

</html>