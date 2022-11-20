<?php
session_start();


require('app/lib/methods.php');
require('app/database/models.php');

if (is_authenticate()) {
} else {
    header('location:login.php');
}

$model = new model();



?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sharify</title>
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="Sharify">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

    <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
    <script src="public/locationpicker.jquery.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.png" />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=karla:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->

    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />

    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css" />

    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />


    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />

</head>


<body class="font-karla text-body text-tiny">
    <div class="overflow-x-hidden">
        <!-- header top start -->

        <!-- header top end -->

        <!-- Header start -->
        <?php include(__DIR__ . '/partial/header2.php') ?>
        <!-- Header end -->
        <!-- Hero section start -->

        <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('assets/images/breadcrumb/bg-1.png');">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                            <div class="mb-5"><span class="text-base block">Sharify</span></div>
                            <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                                Ajouter une annonce
                            </h1>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hero section end -->




        <!-- create agency Etart-->

        <div class="pt-[80px] lg:pt-[120px] add-properties-form-select">
            <div class="container">
                <form method='POST' action="app/lib/process.php?process=addPoperty" enctype="multipart/form-data">



                    <div class="grid grid-cols-12 gap-x-[30px]">
                        <div class="mb-[45] col-span-12">
                            <h1 class="font-lora text-primary text-[15px] sm:text-[15px] xl:text-xl font-medium"> Description de l'annonce</h1>
                            <br>
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-12">

                            <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                Titre
                            </label>

                            <input name="title" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Titre">
                        </div>


                        <div class="mb-[45px] col-span-12">

                            <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                Description
                            </label>
                            <textarea name="desc" required="true" class="h-[196px] xl:h-[196px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none" name="textarea" id="textarea" cols="30" rows="10" placeholder="Ajoutez une description"></textarea>
                        </div>

                    </div>


                    <div class="grid grid-cols-12 gap-x-[30px]">
                        <div class="mb-[45] col-span-12">

                            <h1 class="font-lora text-primary text-[15px] sm:text-[15px] xl:text-xl  font-medium"> Prix de la propriété</h1>
                            <br>
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                Prix
                            </label>
                            <input name="price" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Tarif (dans votre devise)">
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                Etiquette
                            </label>
                            <input name="label" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Etiquette de prix (Ex : /mois)">
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-12">
                            <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                Devise
                            </label>

                            <input name="currency" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Devise (Ex : €,$,£...)">
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                Taux d'imposition
                            </label>
                            <input name="taux" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Taux d'imposition(annuel)">
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                Frais association
                            </label>
                            <input name="fee" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Frais d'association des propriétaires(mensuel)">
                        </div>

                    </div>

                    <div class="grid grid-cols-12 gap-x-[30px]">
                        <div class="mb-[45] col-span-12">
                            <h1 class="font-lora text-primary text-[15px] sm:text-[15px] xl:text-xl  font-medium"> Sélectionnez catégorie</h1>
                            <br>
                        </div>


                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                Catégorie
                            </label>

                            <select name="cat" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] ">
                                <option disabled selected>Catégorie</option>
                                <?php
                                $payload = $model->read('categorie', '*');
                                while ($categorie = $payload->fetch()) {

                                    echo ('

                                    <option value="' . $categorie['id'] . '">' . $categorie['nom'] . '</option>

                                    ');
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-6">

                            <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                Catégorie
                            </label>

                            <select name="type" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] "">
                                <option disabled selected>Listé dans</option>
                                <?php
                                $payload = $model->read('type_annonce', '*');
                                while ($type = $payload->fetch()) {

                                    echo ('

                                    <option value="' . $type['id'] . '">' . $type['nom'] . '</option>

                                    ');
                                }
                                ?>
                            </select>

                        </div>

                    </div>

                    <div class=" grid grid-cols-12 gap-x-[30px]">
                                <div class="mb-[45] col-span-12">
                                    <h1 class="font-lora text-primary text-[15px] sm:text-[15px] xl:text-xl  font-medium"> Localisation</h1>
                                    <br>
                                </div>


                                <div class="mb-[45px] col-span-12 md:col-span-12">
                                    <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                        Adresse
                                    </label>

                                    <input name="addr" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Adresse">
                                </div>


                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                        Etat
                                    </label>
                                    <select name="state" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] ">
                                        <option disabled selected>Etat</option>
                                        <?php
                                        $payload = $model->read('etat', '*');
                                        while ($state = $payload->fetch()) {

                                            echo ('

                                    <option value="' . $state['id'] . '">' . $state['nom'] . '</option>

                                    ');
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                        Ville
                                    </label>
                                    <select name="town" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] ">
                                        <option disabled selected>Ville</option>
                                        <?php
                                        $payload = $model->read('ville', '*');
                                        while ($town = $payload->fetch()) {

                                            echo ('

                                    <option value="' . $town['id'] . '">' . $town['nom'] . '</option>

                                    ');
                                        }
                                        ?>
                                    </select>

                                </div>

                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                        Voisinnage
                                    </label>
                                    <select name="nei" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] ">
                                        <option disabled selected>Voisinage</option>
                                        <?php
                                        $payload = $model->read('voisinage', '*');
                                        while ($nei = $payload->fetch()) {

                                            echo ('

                                    <option value="' . $nei['id'] . '">' . $nei['nom'] . '</option>

                                    ');
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                        Code ZIP
                                    </label>
                                    <input name="zip" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Code Zip">

                                </div>

                                <div class="mb-[45px] col-span-12 md:col-span-12">
                                    <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                        Pays
                                    </label>
                                    <select name="country" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] ">
                                        <option disabled selected>Pays</option>
                                        <?php
                                        $payload = $model->read('pays', '*' );
                                        while ($country = $payload->fetch()) {

                                            echo ('

                                    <option value="' . $country['id'] . '">' . $country['nom'] . '</option>

                                    ');
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-[45px] col-span-12">
                                <div id="us2" style="width: 500px; height: 400px;"></div>
                                </div>


                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                        Longitude
                                    </label>
                                    <input name="lon" id="us2-lon" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Longitude">
                                </div>

                                <div class="mb-[45px] col-span-12 md:col-span-6">
                                    <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                        Latitude
                                    </label>
                                    <input id="us2-lat" name="lat" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Latitude">
                                </div>


                        </div>


                        <div class="grid grid-cols-12 gap-x-[30px]">


                        </div>

                        <div class="grid grid-cols-12 gap-x-[30px]">
                            <div class="mb-[45] col-span-12">
                                <h1 class="font-lora text-primary text-[15px] sm:text-[15px] xl:text-xl  font-medium"> Détails de l'annonce</h1>
                                <br>
                            </div>




                            <div class="mb-[45px] col-span-12 md:col-span-6">
                                <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                    Surface
                                </label>
                                <input name="surf" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Surface en m2">
                            </div>

                            <div class="mb-[45px] col-span-12 md:col-span-6">
                                <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                    Nombre de pièces
                                </label>
                                <input name="pcs" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Nombre de pièces">
                            </div>

                            <div class="mb-[45px] col-span-12 md:col-span-6">
                                <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                    Chambre
                                </label>
                                <input name="room" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Nombre de chambre (chiffres uniquement)">
                            </div>

                            <div class="mb-[45px] col-span-12 md:col-span-6">
                                <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                    Salle de bain
                                </label>
                                <input name="bath" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Nombre de salles de bain (chiffres uniquement)">
                            </div>


                            <div class="mb-[45px] col-span-12 md:col-span-6">
                                <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary" for="cons">
                                    Année de construction
                                </label>
                                <input name="cons" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="date" placeholder="Année de construction">
                            </div>

                            <div class="mb-[45px] col-span-12 md:col-span-6">
                                <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                    Garage
                                </label>
                                <input name="park" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Garage">
                            </div>

                            <div class="mb-[45px] col-span-12 md:col-span-6">
                                <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                    Surface Garage
                                </label>
                                <input name="surf_park" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Surface du Garage">
                            </div>

                            <div class="mb-[45px] col-span-12 md:col-span-6">
                                <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                    Disponible depuis
                                </label>
                                <input name="since" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="date" placeholder="Année de construction">
                            </div>

                            <div class="mb-[45px] col-span-12 md:col-span-6">
                                <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                    Sous sol
                                </label>
                                <input name="ufloor" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Sous-sol">
                            </div>

                            <div class="mb-[45px] col-span-12 md:col-span-6">
                                <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                    Nombre Etage
                                </label>
                                <input name="nb_lvl" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Nombre d'étage (chiffre uniquement | 0 si nul)">
                            </div>

                            <div class="mb-[45px] col-span-12 md:col-span-12">
                                <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                    Remarque propriétaire
                                </label>
                                <input name="remark" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Remarque du propriétaire/agent( non visible pour les visiteur)">
                            </div>

                            <div class="mb-[45px] col-span-12 md:col-span-12">
                                <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">
                                    Statut
                                </label>
                                <select name="action" required="true" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] ">
                                    <option disabled selected>Statut de l'annonce</option>
                                    <?php
                                    $payload = $model->read('categorie_action', '*');
                                    while ($action = $payload->fetch()) {

                                        echo ('

                                    <option value="' . $action['id'] . '">' . $action['nom'] . '</option>

                                    ');
                                    }
                                    ?>
                                </select>
                            </div>


                        </div>

                        <div class="col-span-12 md:col-span-12 mb-[45px]">
                            <div class="mb-[45] col-span-12">
                                <h1 class="font-lora text-primary text-[15px] sm:text-[15px] xl:text-xl  font-medium"> Détails de l'annonce</h1>
                                <br>
                            </div>

                            <h3 class="mb-[40px] font-lora text-[18px] leading-none  text-primary">Détails extérieur
                            </h3>

                            <ul class="mb-[-30px] list-none text-[15px] lg:text-[16px] flex flex-wrap">
                                <?php
                                $payload = $model->read('exterieur', '*');
                                while ($ext = $payload->fetch()) {

                                    echo ('

                                        <li class="mb-[30px] capitalize w-1/2">
                                        <input type="checkbox" id="checkbox' . $ext['id'] . '" name="exterieur' . $ext['id'] . '">
                                        <label for="checkbox' . $ext['id'] . '">' . $ext['nom'] . '</label>
                                    </li>

                                    ');
                                }
                                ?>

                            </ul>
                            <br><br>
                            <h3 class="mb-[40px] font-lora text-[18px] leading-none  text-primary">Détails intérieur
                            </h3>

                            <ul class="mb-[-30px] list-none text-[15px] lg:text-[16px] flex flex-wrap">
                                <?php
                                $payload = $model->read('interieur', '*');
                                while ($int = $payload->fetch()) {

                                    echo ('

                                        <li class="mb-[30px] capitalize w-1/2">
                                        <input type="checkbox" id="checkbox' . $int['id'] . '" name="interieur' . $int['id'] . '">
                                        <label for="checkbox' . $int['id'] . '">' . $int['nom'] . '</label>
                                    </li>

                                    ');
                                }
                                ?>

                            </ul>

                            <br><br>
                            <h3 class="mb-[40px] font-lora text-[18px] leading-none  text-primary">Utilitaires
                            </h3>

                            <ul class="mb-[-30px] list-none text-[15px] lg:text-[16px] flex flex-wrap">
                                <?php
                                $payload = $model->read('utilitaire', '*');
                                while ($int = $payload->fetch()) {

                                    echo ('

                                        <li class="mb-[30px] capitalize w-1/2">
                                        <input type="checkbox" id="checkbox' . $int['id'] . '" name="util' . $int['id'] . '">
                                        <label for="checkbox' . $int['id'] . '">' . $int['nom'] . '</label>
                                    </li>

                                    ');
                                }
                                ?>

                            </ul>

                            <br><br>
                            <h3 class="mb-[40px] font-lora text-[18px] leading-none  text-primary">Autres Caractéristiques
                            </h3>

                            <ul class="mb-[-30px] list-none text-[15px] lg:text-[16px] flex flex-wrap">
                                <?php
                                $payload = $model->read('carac_plus', '*');
                                while ($more = $payload->fetch()) {

                                    echo ('

                                        <li class="mb-[30px] capitalize w-1/2">
                                        <input type="checkbox" id="checkbox' . $more['id'] . '" name="autre' . $more['id'] . '">
                                        <label for="checkbox' . $more['id'] . '">' . $more['nom'] . '</label>
                                    </li>

                                    ');
                                }
                                ?>

                            </ul>
                            <br><br>
                            <div class="grid grid-cols-12 gap-x-[30px]">
                                <div class="mb-[45px] col-span-12">

                                    <label class="mb-[20px] font-lora text-[18px] leading-none block text-primary">Ajoutez Images (1 minimum | 12 maximum)</label>
                                    <div class="py-[35px] px-[15px] flex flex-wrap items-center justify-center text-center border border-primary border-opacity-60 rounded-[8px]">
                                        <div class="relative">
                                            <input class="absolute inset-0 z-[0] opacity-0 w-full" type="file" name="image[]" multiple="multiple" id="Images">
                                            <label for="Images" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all flex flex-wrap items-center justify-center cursor-pointer"> <svg class="mr-[5px]" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21.5853 8.39666C21.4868 8.25357 21.3542 8.1373 21.1995 8.05834C21.0448 7.97938 20.8729 7.94023 20.6992 7.94444H6.82698C6.53428 7.95684 6.25076 8.05025 6.00799 8.21425C5.76523 8.37825 5.57275 8.60641 5.45198 8.87333C5.44998 8.90181 5.44998 8.9304 5.45198 8.95888L3.66753 15.2778V4.27777H7.63365L9.22865 6.47166C9.28554 6.54951 9.36004 6.6128 9.44607 6.65635C9.53211 6.69989 9.62722 6.72246 9.72365 6.72221H19.5564C19.5564 6.39806 19.4277 6.08718 19.1984 5.85797C18.9692 5.62876 18.6584 5.49999 18.3342 5.49999H10.0353L8.62365 3.55666C8.50987 3.40095 8.36085 3.27438 8.18879 3.18728C8.01673 3.10019 7.8265 3.05505 7.63365 3.05555H3.66753C3.34338 3.05555 3.0325 3.18432 2.80329 3.41353C2.57408 3.64274 2.44531 3.95361 2.44531 4.27777V18.1439C2.45485 18.3638 2.55062 18.5711 2.71189 18.721C2.87316 18.8708 3.08695 18.9511 3.30698 18.9444H18.542C18.6783 18.9499 18.8126 18.9095 18.9234 18.8297C19.0341 18.75 19.115 18.6355 19.1531 18.5044L21.7136 9.27666C21.7614 9.12999 21.7747 8.97428 21.7524 8.82164C21.7302 8.66901 21.673 8.52357 21.5853 8.39666ZM18.0592 17.7222H4.21753L6.58865 9.28277C6.64651 9.20822 6.72869 9.15632 6.82087 9.1361H20.467L18.0592 17.7222Z" fill="#FAFAFA" />
                                                </svg> Cliquez ici pour uploader vos médias</label>
                                        </div>
                                    </div>

                                    <div class="mt-[50px] lg:mt-[80px] ">
                                        <button class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[40px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">
                                            Sauvegarder</button>
                                    </div>
                                </div>




                            </div>
                </form>

            </div>














        </div>
    </div>

    <!-- create agency End-->

    <!-- 
    <section>
        <div class="container">
            <div class="grid grid-cols-12 gap-x-[30px] mb-[-45px]">



                <div class="col-span-12 md:col-span-6 mb-[45px]">
                    <h3 class="mb-[40px] font-lora text-[18px] leading-none  text-primary">Place on Map
                    </h3>

                    <div class="h-[350px] rounded-[6px] overflow-hidden">
                        <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4814229.011985735!2d-65.89121968758322!3d-7.7486900084225026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91e8605342744385%3A0x3d3c6dc1394a7fc7!2sAmazon%20Rainforest!5e0!3m2!1sen!2sbd!4v1644813708270!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- News Letter section start -->

    <!-- News Letter section End -->


    <!-- Footer Start -->
    <?php include(__DIR__ . '/partial/footer.php') ?>
    <!-- Footer End -->
    <a id="scrollUp" class="w-12 h-12 rounded-full bg-primary text-white fixed right-5 bottom-16 flex flex-wrap items-center justify-center transition-all duration-300 z-10" href="#" aria-label="scroll up">

        <svg width="25" height="25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M6.101 261.899L25.9 281.698c4.686 4.686 12.284 4.686 16.971 0L198 126.568V468c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12V126.568l155.13 155.13c4.686 4.686 12.284 4.686 16.971 0l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L232.485 35.515c-4.686-4.686-12.284-4.686-16.971 0L6.101 244.929c-4.687 4.686-4.687 12.284 0 16.97z" />
        </svg>

    </a>
    </div>


    <script>
        //Plugin used: https://github.com/Logicify/jquery-locationpicker-plugin

        $('#us2').locationpicker({
            enableAutocomplete: true,
            enableReverseGeocode: true,
            radius: 0,
            inputBinding: {
                latitudeInput: $('#us2-lat'),
                longitudeInput: $('#us2-lon'),
                radiusInput: $('#us2-radius'),
                locationNameInput: $('#us2-address')
            },
            onchanged: function (currentLocation, radius, isMarkerDropped) {
                var addressComponents = $(this).locationpicker('map').location.addressComponents;
                console.log(currentLocation);  //latlon  
                updateControls(addressComponents); //Data
            }
        });

        function updateControls(addressComponents) {
            console.log(addressComponents);
        }
    </script>


    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/parallax.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>

    <!-- Activation JS -->
    <script src="assets/js/main.js"></script>
    <script src="/public/script.js"></script>

</body>

</html>