<?php
// this file contains some utils function

function multi_file_upload($dir, $file, $id)
{


    // upload and return the uploaded file link
    $count_files = count($_FILES[$file]['name']);



    if ($count_files > 12) {
        echo "<script>alert(\"Vous ne pouvez pas uploader plus de 12 media\")</script>";
    } else if ($count_files == 0) {
        echo "<script>alert(\"Vous devez uploader au moins une image\")</script>";
        exit();
    } else {
        if ($_FILES[$file]['name']) {
            error_log('demarrage upload');

            for ($i = 0; $i < $count_files; $i++) {
                $temp_name = $_FILES[$file]['tmp_name'][$i];
                $type = $_FILES[$file]['type'][$i];
                $name = $_FILES[$file]['name'][$i];

                $ext = pathinfo($name, PATHINFO_EXTENSION);
                $allowed = array('jpg', 'png', 'jpeg', 'webp');

                error_log($i . ' format : ' . $type);

                if (!in_array($ext, $allowed)) {

                    echo "<script>alert(\"Erreur ! Format de fichier invalide, veuillez rééssayer\")</script>";
                } else {


                    $urlf = uniqid() . $name;
                    error_log('demarrage upload du fichier ' . $name);
                    move_uploaded_file($temp_name, $dir . $urlf);


                    $img_model = new model();
                    $img_model->create('image_annonce', 'img, annonce', '?,?', $urlf . ',' . $id);
                    error_log('succes upload du fichier ' . $name);
                }
            }
        }
    }
}

function file_upload($dir, $file)
{


    // upload and return the uploaded file link




    if ($_FILES[$file]['name']) {
        error_log('demarrage upload');

       
            $temp_name = $_FILES[$file]['tmp_name'];
            $type = $_FILES[$file]['type'];
            $name = $_FILES[$file]['name'];

            $ext = pathinfo($name, PATHINFO_EXTENSION);
            $allowed = array('jpg', 'png', 'jpeg', 'webp');

            error_log(' format : ' . $type);

            if (!in_array($ext, $allowed)) {

                echo "<script>alert(\"Erreur ! Format de fichier invalide, veuillez rééssayer\")</script>";
            } else {


                $urlf = uniqid() . $name;
                error_log('demarrage upload du fichier ' . $name);
                move_uploaded_file($temp_name, $dir . $urlf);


              return $urlf;
            }
        
    }
}

function is_authenticate()
{

    if (empty($_SESSION['id'])) {
        return false;
    } else {
        return true;
    }
}

function generate_slug($urlString)
{
    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $urlString);
    return $slug;
}
// author : @sadi_henri_paraiso
