<?php
// mengdefiniskan variabel dan diset kosong
$pass = "";
$jumlah = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pass = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-";
    $jumlah = $_POST["jumlah"];
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Content -->
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <h1 class="fw-bold  mt-4 text-uppercase fs-8 text-center">password generator :</h1>
                        <div class="card-body p-5 text-center">

                            <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-3 text-uppercase fs-5">berapa karakter :</h2>



                                    <div class="form-outline form-white mb-5">
                                        <input type="number" id="jumlah" name="jumlah" class="form-control form-control-lg" />
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Generate</button>
                                </div>
                            </form>

                            <div class="form-outline form-white mb-2">
                                <h2 class="fw-bold text-uppercase fs-5 mb-3">Hasil :</h2>
                                <input type="text" id="hasil" class="form-control form-control-lg" value="<?= substr(str_shuffle($pass), 0, $jumlah); ?>" disabled />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>