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
                <h1 class="mt-4">Gestion des membres </h1>

                <form>
                    <div class="row g-3">

                        <!-- start -->
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-text" id="pseudo"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" id="pseudo" placeholder="Pseudo" required>
                            </div>
                        </div>
                        <!-- end start -->

                        <!-- start -->
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-text" id="email"><i class="far fa-envelope-open"></i></span>
                                <input type="text" class="form-control" id="email" placeholder="E-mail" required>
                            </div>
                        </div>
                        <!-- end start -->



                        <!-- start -->
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-text" id="nom"><i class="fas fa-pen"></i></span>
                                <input type="text" class="form-control" id="nom" placeholder="Nom" required>
                            </div>
                        </div>
                        <!-- end start -->


                        <!-- start -->
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-text" id="prenom"><i class="fas fa-pen"></i></span>
                                <input type="text" class="form-control" id="prenom" placeholder="Prénom" required>
                            </div>
                        </div>
                        <!-- end start -->


                        <!-- start -->
                        <div class="col-sm-4">
                            <div class="input-group">
                                <span class="input-group-text" id="password"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="password" placeholder="Mot de passe" required>
                            </div>
                        </div>
                        <!-- end start -->

                        <!-- start -->
                        <div class="col-sm-4">
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Civilité</option>
                                <option value="h">Homme</option>
                                <option value="f">Femme</option>
                            </select>
                        </div>
                        <!-- end start -->

                        <!-- start -->
                        <div class="col-sm-4">
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Status</option>
                                <option value="admin">Admin</option>
                                <option value="membre">Membre</option>
                            </select>
                        </div>
                        <!-- end start -->


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
                        </div> <!-- form-group// -->
                    </div>
                </form>

            </div>

        </main>
        <!------------------ end main ---------------->
        <footer class="py-4 bg-light mt-auto">
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>
