<?php
include "../config/database.php";
include "../helper/functions.php";

if (isset($_POST["submit"])) {
    $image_name = $_FILES["upload_image"]["name"];
    $sql = "INSERT INTO vehicule (titre,marque,modele, description, photo, prix_journalier)VALUES(?,?,?,?,?,?)";
    $stmt = $connection->prepare($sql);
    $stmt->bindValue(1, $_POST["titre"]);
    $stmt->bindValue(2, $_POST["marque"]);
    $stmt->bindValue(3, $_POST["module"]);
    $stmt->bindValue(4, $_POST["description"]);
    $stmt->bindValue(5, "image" . $image_name);
    $stmt->bindValue(6, $_POST["prix"]);
    //$stmt->bindValue(7, $_POST["id_agence"]);
    if ($stmt->execute()) {
        upload_image("upload_image", "../uploads/image");
        header("Location:http://localhost/php_car_site/back_end/car.php");
    }

}

