<?php

/**
 * @des : Ce fonction va récupérer l'image depuis form HTML
 * @param $name il va prendre le nom de fichier
 * @param $path le chemin où va enregistrer le fichier
 */
function upload_image($name, $path)
{
    //folder path
    $target_dir = $path;
    $target_file = $target_dir . basename($_FILES[$name]["name"]);

//flag
    $uploadOk = 1;

//get file extension
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES[$name]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

// Check file size
/*    if ($_FILES[$name]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }*/

// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES[$name]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}