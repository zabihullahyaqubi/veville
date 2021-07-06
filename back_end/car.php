<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>
    <link href="css/styles.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./css/image-upload.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
            crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<?php
include "./includes/header.php"
?>
<div id="layoutSidenav">
    <!--nav-->
    <?php
    include "./includes/nav.php";
    ?>
    <!--end nav-->
    <div id="layoutSidenav_content">

        <!------------------ main ---------------->
        <main>
            <div class="container-fluid px-4">
                <h3 class="mt-4">Gestion des Véhicules</h3>
                <form action="./crud/car.php" method="post" enctype="multipart/form-data">
                    <div class="row g-3">

                        <div class="col-sm-6">
                            <input name="titre" type="text" class="form-control" id="titre" placeholder="Titre" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <input name="marque" type="text" class="form-control" id="marque" placeholder="Marque" value="" required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <input name="module" type="text" class="form-control" id="module" placeholder="Module" value="" required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <input name="prix" type="text" class="form-control" id="prix" placeholder="Prix" value="" required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <!----------------------------- image upload -------------------->
                    <div class="row">
                        <div class="col-lg-6 pt-3">

                            <!-- Upload image input-->
                            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                <input name="upload_image" id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
                                <label id="upload-label" for="upload" class="font-weight-light text-muted">Choisir
                                    image</label>
                                <div class="input-group-append">
                                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i
                                                class="fa fa-cloud-upload mr-2 text-muted"></i><small
                                                class="text-uppercase font-weight-bold text-muted">CHOISIR
                                            FICHIER</small></label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <textarea name="description" class="form-control" id="des" rows="5" placeholder="Description"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </div>
                        <div class="col-6 ">
                            <!-- Uploaded image area-->
                            <div class="image-area mt-4 mx-auto"><img id="imageResult" src="#" alt=""
                                                                      class="img-fluid rounded shadow-sm mx-auto d-block">
                            </div>
                        </div>
                    </div>


                    <!----------------------------- end image upload -------------------->
                </form>
            </div>
        </main>
        <!------------------ end main ---------------->
        <footer class="py-4 bg-light mt-auto">
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
<script src="./js/image-upload.js"></script>
</body>
</html>
