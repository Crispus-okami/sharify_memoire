<?php

use Symfony\Component\VarDumper\Cloner\Data;

session_start();
// This file manage our web app logic 





// get the model

/* function download()
{
    // download a candidate resume
    $file = $_GET['file'];
    header('Content-Type: application/pdf');
    readfile($file);
    header('location: /admin.php');
}
 */
function register()
{
    // USER PRIVILEGES
    // 0 -> SuperUser
    // 1 -> Professional
    // 2 -> Particular
    // 3 -> Agent

    //USER INFOS
    $username = $_POST["username"];
    $email = $_POST["mail"];
    $password = $_POST["password"];
    $password2 = $_POST["confirm"];
    $type = $_POST["type"];
    $ville = $_POST['ville'];

    if (isset($username) and !empty($username) and isset($email) and !empty($email) and isset($type) and !empty($type) and isset($password) and !empty($password) and isset($password2) and !empty($password2)) {

        if ($password == $password2) {

            if ($_POST['term'] == 'on') {
                require(__DIR__ . '/../database/models.php');
                $model = new model();

                $table = 'user';
                $field = '*';
                $sfield = 'pseudo';
                $payload = $model->read_filter_once($table, $field, $sfield, $username);


                if ($payload->rowCount() == 0) {


                    $table = 'user';
                    $field = '*';
                    $sfield = 'email';
                    $payload = $model->read_filter_once($table, $field, $sfield, $email);

                    if ($payload->rowCount() == 0) {

                        $table = 'user';
                        $fields = 'pseudo, email, ville, password, compte, img';
                        $values = '?,?,?,?,?,?';
                        $data = '' . $username . ',' . $email . ','. $ville . ',' . sha1($password) . ',' . $type . ',avater.png';

                        $model->create($table, $fields, $values, $data);

                        // init abonnement
                        $table = 'abonnement';
                        $fields = 'compte, debut, fin, pack';
                        $values = '?,?,?,?';
                        // get new user id
                        $payload = $model->read_filter_once('user', '*', 'pseudo', $username);
                        while ($user = $payload->fetch()) {
                            $id = $user['id'];
                        }
                        $debut = date("Y-m-d");
                        $fin = date('Y-m-d', strtotime($debut . '+90 days'));
                        $pack = 1;
                        $data = '' . $id . ',' . $debut . ',' . $fin . ',' . $pack . '';
                        $model->create($table, $fields, $values, $data);
                        
                        $model->create('agence', 'nom, compte, email, ville', '?,?,?,?', $username . ',' . $id . ',' . $email. ',' . $ville);



                        echo "<script>alert(\"Votre compte à été créer avec succès\"); location.href = '../../register.php';</script>";
                    } else {
                        echo "<script>alert(\"Erreur ! Cette adresse email est déjà utilisé\"); location.href = '../../register.php';</script>";
                    }
                } else {
                    echo "<script>alert(\"Erreur ! Ce nom d'utilisateur est déjà utilisé\"); location.href = '../../register.php';</script>";
                }
            } else {
                echo "<script>alert(\"Erreur ! Veuillez accepté les termes et conditions.\"); location.href = '../../register.php';</script>";
            }
        } else {
            echo "<script>alert(\"Erreur ! Les mots de passe ne sont pas identiques\"); location.href = '../../register';</script>";
        }
    } else {
        echo "<script>alert(\"Erreur ! Tous les champs sont requis\"); location.href = '../../register.php';</script>";
    }
}

function logout()
{
    session_start(); // demarrer la session
    session_destroy(); // supprimer les informations en session
    session_abort(); // fermer la session
    // echo "<script>alert(\"On espère vous revoir bientôt :-)\")</script>";
    echo "<script>location.href = '../../login.php';</script>";
}

function login()
{

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($username) and !empty($username) and isset($password) and !empty($password)) {
        require(__DIR__ . '/../database/models.php');
        $model = new model();

        $user = $model->read_filter_or('user', '*', 'pseudo', 'email', $username . ',' . $username);

        if ($user->rowCount() == 1) {

            while ($instance = $user->fetch()) {
                if ($instance['password'] == sha1($password)) {


                    $_SESSION = [
                        'id' => $instance['id'],
                        'email' => $instance['email'],
                        'profile' => $instance['img'],
                        'compte' => $instance['compte']
                    ];

                    echo "<script>alert(\"Succès\"); location.href = '../../dashboard/';</script>";

                    // Demarrer la session 



                } else {
                    echo "<script>alert(\"Erreur ! Nom d'utilisateur ou mot de passe incorrect\"); location.href = '../../login.php';</script>";
                }
            }
        } else {

            echo "<script>alert(\"Erreur ! Nom d'utilisateur ou mot de passe incorrect\"); location.href = '../../login.php';</script>";
        }
    }
}

function addPoperty()
{

    // Post Variable List
    /*
        title, desc, price, label, currency, taux, fee, cat, type
        addr, state, town, nei, zip, country, lon, lat, surf, pcs
        room, bath, cons, park, surf_park, since, ufloor, nb_lvl,
        remark, action, 
         ---------
        |checkbox| 
        ---------
        exterieur + id
        interieur + id
        autre + id

    */

    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $label = $_POST['label'];
    $currency = $_POST['currency'];
    $taux = $_POST['taux'];
    $fee = $_POST['fee'];
    $cat = $_POST['cat'];
    $type = $_POST['type'];
    $addr = $_POST['addr'];
    $state = $_POST['state'];
    $town = $_POST['town'];
    $nei = $_POST['nei'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $lon = $_POST['lon'];
    $lat = $_POST['lat'];
    $surf = $_POST['surf'];
    $pcs = $_POST['pcs'];
    $room = $_POST['room'];
    $bath = $_POST['bath'];
    $cons = $_POST['cons'];
    $park = $_POST['park'];
    $surf_park = $_POST['surf_park'];
    $since = $_POST['since'];
    $ufloor = $_POST['ufloor'];
    $nb_lvl = $_POST['nb_lvl'];
    $remark = $_POST['remark'];
    $action = $_POST['action'];

    if (
        isset(
            $title,
            $desc,
            $price,
            $label,
            $currency,
            $fee,
            $cat,
            $type,
            $addr,
            $state,
            $town,
            $nei,
            $zip,
            $country,
            $surf,
            $lon,
            $lat,
            $surf,
            $pcs,
            $room,
            $bath,
            $cons,
            $park,
            $surf_park,
            $since,
            $ufloor,
            $nb_lvl,
            $remark,
            $action
        ) &&
        !empty($title) && !empty($desc) && !empty($price) && !empty($label) && !empty($currency) && !empty($taux) && !empty($fee) &&
        !empty($cat) && !empty($type) && !empty($type) && !empty($addr) && !empty($state) && !empty($town) && !empty($nei) &&
        !empty($zip) && !empty($country) && !empty($lon) && !empty($lat) && !empty($surf) && !empty($pcs) && !empty($room) &&
        !empty($bath) && !empty($cons) && !empty($park) && !empty($surf_park) && !empty($since) && !empty($ufloor) &&
        !empty($remark) && !empty($action)
    ) {

        require(__DIR__ . '/../database/models.php');
        $model = new model();


        $table = "annonce";
        $fields = "titre, slug, description, compte_agence, prix, etiquette_duree, devise, taux_imp, frais_proprios, categorie_annonce, type_annonce, adresse, etat, ville, voisinage, code_zip, pays, longitude, latitude, surface, nb_piece, chambres, salle_bain, annee_cons, garage, surface_garage, dispo_depuis, sous_sol, nb_etage, statut, remarque";
        $values = "?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";
        // session_start();
        $account = $_SESSION['id'];

        require(__DIR__ . '/../lib/methods.php');

        $slug = generate_slug($title . uniqid());



        $data = '' . $title . '%' . $slug . '%' . $desc . '%' . $account . '%' . $price . '%' . $label . '%' . $currency . '%' . $taux . '%' . $fee . '%' . $cat . '%' . $type . '%' . $addr . '%' . $state . '%' . $town . '%' . $nei . '%' . $zip . '%' . $country . '%' . $lon . '%' . $lat . '%' . $surf . '%' . $pcs . '%' . $room . '%' . $bath . '%' . $cons . '%' . $park . '%' . $surf_park . '%' . $since . '%' . $ufloor . '%' . $nb_lvl . '%' . $action . '%' . $remark . '';

        if (count(explode(',', $values)) == count(explode(',', $fields)) and count(explode(',', $values)) == count(explode('%', $data))) {
            $model->create($table, $fields, $values, $data, '%');
        } else {
            echo "<script>alert(\"Fatal error\");</script>";
            exit();
        }

        $payload = $model->read_filter_once('annonce', 'id', 'slug', $slug);

        while ($annonce = $payload->fetch()) {
            $new_id = $annonce['id'];
        }

        // exterieur 

        $payload = $model->read('exterieur', '*');
        while ($ext = $payload->fetch()) {

            if (isset($_POST['exterieur' . $ext['id']]) && $_POST['exterieur' . $ext['id']] == 'on') {



                $model->create('exterieur_annonce', 'exterieur, annonce', '?,?', $ext['id'] . ',' . $new_id);
            }
        }
        $payload = $model->read('interieur', '*');
        while ($int = $payload->fetch()) {

            if (isset($_POST['interieur' . $int['id']]) && $_POST['interieur' . $int['id']] == 'on') {



                $model->create('interieur_annonce', 'interieur, annonce', '?,?', $int['id'] . ',' . $new_id);
            }
        }

        $payload = $model->read('carac_plus', '*');
        while ($more = $payload->fetch()) {

            if (isset($_POST['autre' . $more['id']]) && $_POST['autre' . $more['id']] == 'on') {



                $model->create('carac_plus_annonce', 'carac_plus, annonce', '?,?', $more['id'] . ',' . $new_id);
            }
        }

        $payload = $model->read('utilitaire', '*');
        while ($util = $payload->fetch()) {

            if (isset($_POST['util' . $util['id']]) && $_POST['autre' . $util['id']] == 'on') {



                $model->create('utilitaire_annonce', 'utilitaire, annonce', '?,?', $util['id'] . ',' . $new_id);
            }
        }

        multi_file_upload(__DIR__ . "/../media/properties/images/", "image", $new_id);








        echo "<script>alert(\"Votre annonce à été ajoutée avec succès\"); location.href = '../../index.php';</script>";
    } else {
        echo "<script>alert(\"Erreur ! Remplissez les champs requis\");</script>";
    }
}

function getLatest()
{

    require(__DIR__ . '/../database/models.php');
    $model = new model();
}

function upProf()
{


    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];
    $mob = $_POST['mob'];
    $skype = $_POST['skype'];
    $lg = $_POST['lg'];
    $ifu = $_POST['ifu'];
    $rccm = $_POST['rccm'];
    $hr = $_POST['hr'];
    $api = $_POST['api'];
    $fb = $_POST['fb'];
    $insta = $_POST['insta'];
    $twi = $_POST['twi'];
    $pin = $_POST['pin'];
    $lkd = $_POST['lkd'];
    $web = $_POST['web'];
    $ville = $_POST['ville'];
    $pays = $_POST['pays'];
    $zone = $_POST['zone'];
    $about = $_POST['about'];
    $addr = $_POST['addr'];
    $compte = $_GET['id'];

    $query = "UPDATE agence SET nom=?, telephone=?, email=?, mobile=?, skype=?, langue=?, siren=?, siret=?, horaire=?, hubspot=?, facebook=?, insta=?, twitter=?, pinterest=?, linkedin=?, web=?, ville=?, pays=?, zone=?, adresse=?, about=? WHERE compte=?";



    require('../database/models.php');
    $model = new model();
    $db = $model->getChain();

    $a = $db->prepare($query);
    $a->execute(array($name, $tel, $mail, $mob, $skype, $lg, $ifu, $rccm, $hr, $api, $fb, $insta, $twi, $pin, $lkd, $web, $ville, $pays, $zone, $about, $addr, $compte));
    
    require("../lib/methods.php");

    $img=file_upload(__DIR__ . "/../media/users/profiles/", "prof");

    if($img!=null){
        $ag = $_SESSION['id'];
        $query = "UPDATE user set img='$img' WHERE id='$ag'";
			$db->query($query);
            $_SESSION['profile']=$img;
    }
   
    echo "<script>alert(\"Succès\"); location.href = '../../dashboard/profile.php';</script>";
}

function addAgent()
{


    $username = $_POST["username"];
    $email = $_POST["mail"];
    $password = $_POST["password"];
    $password2 = $_POST["confirm"];
    $type = 3;

    if (isset($username) and !empty($username) and isset($email) and !empty($email) and isset($type) and !empty($type) and isset($password) and !empty($password) and isset($password2) and !empty($password2)) {

        if ($password == $password2) {


            require(__DIR__ . '/../database/models.php');
            $model = new model();

            $table = 'user';
            $field = '*';
            $sfield = 'pseudo';
            $payload = $model->read_filter_once($table, $field, $sfield, $username);


            if ($payload->rowCount() == 0) {


                $table = 'user';
                $field = '*';
                $sfield = 'email';
                $payload = $model->read_filter_once($table, $field, $sfield, $email);

                if ($payload->rowCount() == 0) {

                    $img=file_upload(__DIR__ . "/../media/users/profiles/", "prof");
                    $ava="avater.png";
                    if($img!=null){
                        $ag = $_SESSION['id'];
                        $query = "UPDATE user set img='$img' WHERE id='$ag'";
                        $db->query($query);
                        
                        $ava = $img;
                    }
                   
                    $table = 'user';
                    $fields = 'pseudo, email, password, compte, img';
                    $values = '?,?,?,?,?';
                    $data = '' . $username . ',' . $email . ',' . sha1($password) . ',' . $type . ','.$ava;

                    $model->create($table, $fields, $values, $data);


                    $payload = $model->read_filter_once('user', '*', 'pseudo', $username);
                    while ($user = $payload->fetch()) {
                        $id = $user['id'];
                    }


                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $tel = $_POST['tel'];
                    $mail = $_POST['mail'];
                    $mob = $_POST['mob'];
                    $skype = $_POST['skype'];
                    $member = $_POST['member'];
                    $fb = $_POST['fb'];
                    $insta = $_POST['insta'];
                    $twi = $_POST['twi'];
                    $pin = $_POST['pin'];
                    $lkd = $_POST['lkd'];
                    $web = $_POST['web'];
                    $ville = $_POST['ville'];
                    $pays = $_POST['pays'];
                    $zone = $_POST['zone'];
                    $about = $_POST['about'];
                    $addr = $_POST['addr'];
                    $agency = $_SESSION['id'];


                    $field = 'compte,agency,member_of,nom,fname,lname,telephone,email,mobile,skype,facebook,insta,twitter,pinterest,linkedin,web,ville,pays,zone,adresse,about';
                    $value = '?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?';
                    $data = $id.'%'.$agency.'%'.$member.'%'.$username.'%'.$fname.'%'.$lname.'%'.$tel.'%'.$mail.'%'.$mob.'%'.$skype.'%'.$fb.'%'.$insta.'%'.$twi.'%'.$pin.'%'.$lkd.'%'.$web.'%'.$ville.'%'.$pays.'%'.$zone.'%'.$addr.'%'.$about;
                    // dd(explode('%', $data), explode(',', $field), explode(',', $value));
                    
    /*                 if (count(explode(',', $values)) == count(explode(',', $fields)) and count(explode(',', $values)) == count(explode('%', $data))) {
                        $model->create($table, $fields, $values, $data, '%');
                    } else {
                        echo "<script>alert(\"Fatal error\");</script>";
                        exit();
                    } */
                    
                    $model->create('agent', $field, $value, $data, '%');



                    echo "<script>alert(\"Agent créé avec succès\"); location.href = '../../login.php';</script>";
                } else {
                    echo "<script>alert(\"Erreur ! Cette adresse email est déjà utilisé\"); location.href = '../../dashboard/';</script>";
                }
            } else {
                echo "<script>alert(\"Erreur ! Ce nom d'utilisateur est déjà utilisé\"); location.href = '../../dashboard/';</script>";
            }
        } else {
            echo "<script>alert(\"Erreur ! Les mots de passe ne sont pas identiques\"); location.href = '../../dashboard/';</script>";
        }
    } else {
        echo "<script>alert(\"Erreur ! Tous les champs sont requis\"); location.href = '../../dashboard/';</script>";
    }
}

//author: @sadi_henri_paraiso
