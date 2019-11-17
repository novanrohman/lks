<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Admin</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/style.css">

</head>



<body>
    <!-- Form Login -->
    <div class="form-control">
        <div class="form-group">
            <div class="form-group">
                <table>
                    <tr>
                        <th>Username</th>
                        <td>:</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>:</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                </table>
            </div>
            <input class="btn btn-success" type="submit" name="login" method="POST" value="Login">
        </div>
    </div>
    <!-- End Form login -->

    <!-- JQuery -->
    <script src="Assets/js/bootstrap.min.js"></script>
</body>

</html>