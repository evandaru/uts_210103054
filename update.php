<?php
include_once('connection.php');
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $nama = $_POST['nama'];
    $pemilik = $_POST['pemilik'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $waktu = $_POST['waktu'];
    $result = mysqli_query($mysqli, "UPDATE tb_ikan SET nama='$nama', pemilik='$pemilik', kategori='$kategori', jumlah='$jumlah', harga='$harga' WHERE id=$id ");
    header('location:index.php');
}
?>
<!doctype html>
<html lang="en">
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM tb_ikan WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
    $id = $res['id'];
    $nama = $res['nama'];
    $pemilik = $res['pemilik'];
    $kategori = $res['kategori'];
    $jumlah = $res['jumlah'];
    $harga = $res['harga'];
    $waktu = $res['waktu'];
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPDATE🤔</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container vh-100">

        <h1>UPDATE DULU NGABBSSS🥵</h1>
        <div class="btn btn-primary">Back to index 😎</div>
        <form name="form" method="post" action="update.php">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">pemilik</label>
                <input type="text" name="pemilik" class="form-control" value="<?php echo $pemilik; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $kategori; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">jumlah</label>
                <input type="text" name="jumlah" class="form-control" value="<?php echo $jumlah; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $harga; ?>">
            </div>
            <input type="hidden" name="id" value=<?php echo $id; ?>>
            <button type="submit" name="update" value="update" class="btn btn-primary">Submit 😱😎</button>
        </form>
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