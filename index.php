<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site III</title>

    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <div class="container-fluid">
        <div class="d-flex my-5 justify-content-center align-items-center">

            <div class="col-12 col-lg-6 mt-5 h-100 card bg-dark" id="card">
                <div class="card-body text-white">
                    <div class="row">
                        <div class="col-5" id="background"></div>

                        <div class="col-7">

                            <div class="col-12 p-2 d-flex justify-content-center d-grid">
                                <img src="2256138.png" width="200px">
                            </div>

                            <div class="col-12 p-2">
                                <input type="text" class="form-control" placeholder="Email ID">
                            </div>

                            <div class="col-12 p-2">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input d-inline">
                                    <label class="form-check-label">Remember me</label>
                                </div>
                            </div>

                            <div class="col-12 text-end">
                                <a href="#" class="link-primary"> Forgotten Password?</a>
                            </div>

                            <div class="col-12 mt-4 d-flex justify-content-center">
                                <button onclick="login();" class="col-8 btn btn-warning"> Sign In</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php require "footer.php" ?>

    <script src="script.js"></script>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.js"></script>
</body>

</html>