<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | GoShop</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/style.css">
</head>

<body>
    <nav>
        <div class="nav navbar-nav bg-dark text-white">
            <div class="row">
                <div class="navbar-brand  mt-2 col-2">
                    <p>Goshop </p>
                </div>
                <div class="nav navbar-nav navbar-dark mt-2">
                    <div class=row>
                        <ul>
                            <li class="navbar-text"><a href="#">Data produk</a></li>
                            <li class="navbar-text"><a href="#">Logout</a></li>
                            <li class="navbar-text"><a href="#">Link 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Form tambah produk -->
    <div class="container mt-4">
        <div class="block">

            <ul>
                <li><input type="text" name="nama-produk" placeholder="Nama Produk">
                </li>
            </ul>
            <ul>
                <li><input type="text" name="kode-produk" placeholder="Kode Produk">
                </li>
            </ul>
            <ul>
                <li><input type="number" name="harga-produk" placeholder="Harga Produk">
                </li>
            </ul>
            <ul>
                <li><input type="text" name="deskripsi" placeholder="Deskripsi Produk">
                </li>
            </ul>
            <ul>
                <li><input type="number" name="stok" placeholder="Stok Produk">
                </li>
            </ul>
            <div class="p-2">
                <input type="file" name="img" placeholder="Gambar Produk">
            </div>


        </div>

        <div class="p-2">
            <input type="submit" name="add" value="add">
        </div>
    </div>

    <!-- End Form tambah produk -->


    <!-- JQuery -->
    <script src="../Assets/js/bootstrap.min.js"></script>
</body>

</html>