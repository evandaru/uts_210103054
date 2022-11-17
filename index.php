<?php
include_once('connection.php');
$result = mysqli_query($mysqli, "SELECT * FROM tb_ikan WHERE id ");
$angka = 0;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>READ😎</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container vh-100">

        <h1>Welcome to fish shop🐟</h1>
        <a href="create.php">
            <div class="btn btn-primary">Tambah Barang 😎</div>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Pemilik</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Data Masuk</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($res = mysqli_fetch_array($result)) {
                    $angka++;
                    echo '<td>' . $angka . '.</td>';
                    echo '<td>' . $res['nama'] . '</td>';
                    echo '<td>' . $res['pemilik'] . '</td>';
                    echo '<td>' . $res['kategori'] . '</td>';
                    echo '<td>' . $res['jumlah'] . '</td>';
                    echo '<td>' . $res['harga'] . '</td>';
                    echo '<td>' . $res['waktu'] . '</td>';
                    echo '<td><a href="update.php?id=
                    ' . $res['id'] . '    
                    ">✏edit</a> | 
                    <a href="delete.php?id=
                    ' . $res['id'] . '
                    ">🗑 Delete</a>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer class="bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Footer text</h5>

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                        aliquam voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Footer text</h5>

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                        aliquam voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>