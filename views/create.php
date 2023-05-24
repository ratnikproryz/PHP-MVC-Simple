<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <style>
        .lh-3 {
            line-height: 3;
        }
    </style>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center">
        <div class=" pt-5">
            <h3 class="text-center">Thêm khoa mới:</h3>
            <form action="../index.php?action=store" method="post" enctype="multipart/form-data">
                <table>
                    <tr class="lh-3">
                        <td>Mã Khoa:</td>
                        <td>
                            <input type="text" name="makhoa" class="form-control">
                        </td>
                    </tr>
                    <tr class="lh-3">
                        <td>Tên Khoa:</td>
                        <td>
                            <input type="text" name="tenkhoa" class="form-control">
                        </td>
                    </tr>
                </table>
                <div class="text-center pt-1">
                    <button class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html> 