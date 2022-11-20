<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sharify</title>
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="Sharify">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css">


    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />

</head>


<body class="font-karla text-body text-tiny">
    <div class="overflow-x-hidden">
        <!-- header top start -->

        <!-- header top end -->

        <!-- Header start -->

        <?php require('partial/header2.php'); ?>
        <!-- offcanvas-overlay start -->
        <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
        <!-- offcanvas-overlay end -->
        <!-- offcanvas-mobile-menu start -->

        <!-- offcanvas-mobile-menu end -->
        <!-- Header end -->
        <!-- Hero section start -->


        <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('assets/images/breadcrumb/bg-1.png');">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="max-w-[600px]  mx-auto text-center text-white relative z-[1]">
                            <div class="mb-5"><span class="text-base block">Nos propriétés</span></div>
                            <h1 class="font-lora text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                                Details
                            </h1>

                            <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                                <!--  Huge number of propreties availabe here for buy and sell
                                also you can find here co-living property as you like -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        require('app/database/models.php');
        $model = new  model();

        $payload = $model->read_filter_once('annonce', '*', 'slug', $_GET['property']);

        $property = $payload->fetch();

        $pic_payload = $model->read_filter_once("image_annonce", "*", "annonce", $property['id']);


        ?>

        <!-- Hero section end -->

        <!-- Popular Properties start -->
        <section class="popular-properties py-[80px] lg:py-[120px]">
            <div class="container">

                <div class="grid grid-cols-12 mb-[-30px] gap-[30px] xl:gap-[50px]">
                    <div class="col-span-12 md:col-span-6 lg:col-span-8 mb-[30px]">
                        <div class="owl-carousel owl-theme">
                            <?php
                            while ($line = $pic_payload->fetch()) {

                                echo '
                                        <div class="item">

                                        <img src="app/media/properties/images/' . $line['img'] . '" class="w-auto h-auto" loading="lazy" alt="Elite Garden Resedence." width="770" height="465">


                                        </div>
                                    ';
                            }
                            ?>

                        </div>
                        <div class="mt-[45px] mb-[35px]">
                            <h2 class="font-lora leading-tight text-[22px] md:text-[28px] lg:text-[36px] text-primary mb-[5px] font-medium">
                                <?php echo $property['titre'] ?></h2>
                            <h3 class="font-light text-[18px] text-secondary underline mb-[20px] flex flex-wrap items-center">
                                <span style="margin-right: 10px;">
                                    <svg class=" left-[20px] pointer-events-none" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.39648 6.41666H8.60482" stroke="#016450" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M7 8.02083V4.8125" stroke="#016450" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M2.11231 4.9525C3.26148 -0.0991679 10.7456 -0.0933345 11.889 4.95833C12.5598 7.92167 10.7165 10.43 9.10064 11.9817C7.92814 13.1133 6.07314 13.1133 4.89481 11.9817C3.28481 10.43 1.44148 7.91583 2.11231 4.9525Z" stroke="#016450" stroke-width="1.5"></path>
                                    </svg>
                                </span>
                                <?php
                                $vreq = $model->read_filter_once("ville", '*', 'id', $property['ville']);
                                $ville = $vreq->fetch();
                                $preq = $model->read_filter_once("pays", '*', 'id', $property['pays']);
                                $pays = $preq->fetch();
                                echo $property['adresse'] ?>, <?php echo $ville["nom"] ?>, <?php echo $pays["nom"] ?></h2>
                            </h3>

                            <h3 class="font-light text-[18px] text-primary  mb-[20px] flex flex-wrap items-center">
                                <span style="margin-right: 10px;">
                                    <svg class=" left-[20px] pointer-events-none" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_928_754)">
                                            <path d="M4.64311 0H0V4.64311H4.64311V0ZM3.71437 3.71437H0.928741V0.928741H3.71437V3.71437Z" fill="#016450"></path>
                                            <path d="M8.35742 0V4.64311H13.0005V0H8.35742ZM12.0718 3.71437H9.28616V0.928741H12.0718V3.71437Z" fill="#016450"></path>
                                            <path d="M0 13H4.64311V8.35689H0V13ZM0.928741 9.28563H3.71437V12.0713H0.928741V9.28563Z" fill="#016450"></path>
                                            <path d="M8.35742 13H13.0005V8.35689H8.35742V13ZM9.28616 9.28563H12.0718V12.0713H9.28616V9.28563Z" fill="#016450"></path>
                                            <path d="M6.96437 0H6.03563V6.03563H0V6.96437H6.03563V13H6.96437V6.96437H13V6.03563H6.96437V0Z" fill="#016450"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_928_754">
                                                <rect width="13" height="13" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </span>
                                <?php echo $property['surface'] ?> m² | <span style="margin-left: 10px; margin-right: 10px;">
                                    <svg class="left-[20px] pointer-events-none" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.78125 9.55323C5.78125 10.4132 6.44125 11.1066 7.26125 11.1066H8.93458C9.64792 11.1066 10.2279 10.4999 10.2279 9.75323C10.2279 8.9399 9.87458 8.65323 9.34792 8.46657L6.66125 7.53323C6.13458 7.34657 5.78125 7.0599 5.78125 6.24657C5.78125 5.4999 6.36125 4.89323 7.07458 4.89323H8.74792C9.56792 4.89323 10.2279 5.58657 10.2279 6.44657" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8 4V12" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M7.9987 14.6667C11.6806 14.6667 14.6654 11.6819 14.6654 8C14.6654 4.3181 11.6806 1.33333 7.9987 1.33333C4.3168 1.33333 1.33203 4.3181 1.33203 8C1.33203 11.6819 4.3168 14.6667 7.9987 14.6667Z" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                </span>
                                <?php echo $property['prix'] ?> <?php echo $property['devise'] ?> <?php echo $property['etiquette_duree'] ?> | <span style="margin-left: 10px; margin-right: 10px;">
                                    <svg class="mr-[5px]" width="20" height="16" viewBox="0 0 14 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.0002 4.18665V2.33331C13.0002 1.23331 12.1002 0.333313 11.0002 0.333313H8.3335C7.82016 0.333313 7.3535 0.533313 7.00016 0.853313C6.64683 0.533313 6.18016 0.333313 5.66683 0.333313H3.00016C1.90016 0.333313 1.00016 1.23331 1.00016 2.33331V4.18665C0.593496 4.55331 0.333496 5.07998 0.333496 5.66665V9.66665H1.66683V8.33331H12.3335V9.66665H13.6668V5.66665C13.6668 5.07998 13.4068 4.55331 13.0002 4.18665ZM8.3335 1.66665H11.0002C11.3668 1.66665 11.6668 1.96665 11.6668 2.33331V3.66665H7.66683V2.33331C7.66683 1.96665 7.96683 1.66665 8.3335 1.66665ZM2.3335 2.33331C2.3335 1.96665 2.6335 1.66665 3.00016 1.66665H5.66683C6.0335 1.66665 6.3335 1.96665 6.3335 2.33331V3.66665H2.3335V2.33331ZM1.66683 6.99998V5.66665C1.66683 5.29998 1.96683 4.99998 2.3335 4.99998H11.6668C12.0335 4.99998 12.3335 5.29998 12.3335 5.66665V6.99998H1.66683Z"></path>
                                    </svg>

                                </span>
                                <?php echo $property['chambres'] ?> Chambres |
                                <span style="margin-left:10px; margin-right:10px;">
                                    <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.6875 7.65627H2.1875V2.7344C2.18699 2.54904 2.22326 2.36543 2.29419 2.19418C2.36512 2.02294 2.46932 1.86746 2.60075 1.73676L2.61168 1.72582C2.81765 1.52015 3.0821 1.38309 3.36889 1.33336C3.65568 1.28362 3.95083 1.32364 4.21403 1.44795C3.96546 1.86122 3.86215 2.34571 3.9205 2.82443C3.97885 3.30315 4.19552 3.74864 4.53608 4.0901L4.83552 4.38954L4.28436 4.94073L4.90304 5.55941L5.4542 5.00825L8.5082 1.95431L9.05937 1.40314L8.44066 0.78443L7.88946 1.3356L7.59002 1.03616C7.23151 0.678646 6.75892 0.458263 6.2546 0.413412C5.75029 0.368561 5.24622 0.502086 4.83025 0.790719C4.3916 0.513704 3.87178 0.394114 3.35619 0.451596C2.84059 0.509078 2.35987 0.740213 1.993 1.10703L1.98207 1.11797C1.76912 1.32975 1.6003 1.58165 1.48537 1.85911C1.37044 2.13657 1.31168 2.43407 1.3125 2.7344V7.65627H0.4375V8.53127H1.3125V9.37072C1.31248 9.44126 1.32386 9.51133 1.34619 9.57823L2.16016 12.02C2.20359 12.1508 2.28712 12.2645 2.39887 12.345C2.51062 12.4256 2.64491 12.4689 2.78266 12.4688H3.1354L2.81641 13.5625H3.72786L4.04688 12.4688H9.73711L10.0652 13.5625H10.9785L10.6504 12.4688H11.2172C11.355 12.4689 11.4893 12.4256 11.6011 12.3451C11.7129 12.2645 11.7964 12.1508 11.8398 12.02L12.6538 9.57823C12.6761 9.51133 12.6875 9.44126 12.6875 9.37072V8.53127H13.5625V7.65627H12.6875ZM5.15484 1.65486C5.3959 1.41433 5.72254 1.27924 6.06308 1.27924C6.40362 1.27924 6.73026 1.41433 6.97132 1.65486L7.2707 1.95431L5.45429 3.77072L5.15484 3.47134C4.91432 3.23027 4.77924 2.90364 4.77924 2.5631C4.77924 2.22256 4.91432 1.89593 5.15484 1.65486ZM11.8125 9.33518L11.0597 11.5938H2.94033L2.1875 9.33518V8.53127H11.8125V9.33518Z"></path>

                                    </svg>

                                </span>
                                <?php
                                echo $property['salle_bain']
                                ?>
                                Salles de bains |
                                <span style="margin-left:10px; margin-right:10px;">
                                    <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.25 6.98507H12.236L11.1307 4.49805C11.0275 4.26615 10.8592 4.06913 10.6464 3.93083C10.4335 3.79253 10.1851 3.71887 9.93125 3.71875H4.06875C3.81491 3.71888 3.56655 3.79256 3.3537 3.93086C3.14085 4.06916 2.97263 4.26616 2.86937 4.49805L1.76397 6.98507H1.75C1.51802 6.98533 1.29561 7.0776 1.13157 7.24164C0.967531 7.40568 0.875261 7.62809 0.875 7.86007V10.9226C0.875261 11.1546 0.967531 11.377 1.13157 11.541C1.29561 11.705 1.51802 11.7973 1.75 11.7976V12.9062C1.7502 13.0802 1.81941 13.247 1.94243 13.3701C2.06546 13.4931 2.23226 13.5623 2.40625 13.5625H3.9375C4.11149 13.5623 4.27829 13.4931 4.40131 13.3701C4.52434 13.247 4.59355 13.0802 4.59375 12.9062V11.7976H9.40625V12.9062C9.40645 13.0802 9.47566 13.247 9.59869 13.3701C9.72171 13.4931 9.88851 13.5623 10.0625 13.5625H11.5938C11.7677 13.5623 11.9345 13.4931 12.0576 13.3701C12.1806 13.247 12.2498 13.0802 12.25 12.9062V11.7976C12.482 11.7973 12.7044 11.705 12.8684 11.541C13.0325 11.377 13.1247 11.1546 13.125 10.9226V7.86007C13.1247 7.62809 13.0325 7.40568 12.8684 7.24164C12.7044 7.0776 12.482 6.98533 12.25 6.98507ZM3.66885 4.85352C3.70327 4.7762 3.75936 4.71052 3.83033 4.66442C3.90131 4.61831 3.98412 4.59377 4.06875 4.59375H9.93125C10.0159 4.59379 10.0986 4.61835 10.1696 4.66445C10.2406 4.71055 10.2966 4.77622 10.331 4.85352L11.2784 6.98504H2.7215L3.66885 4.85352ZM3.71875 12.6875H2.625V11.7976H3.71875V12.6875ZM11.375 12.6875H10.2812V11.7976H11.375V12.6875ZM12.25 10.9226H1.75V7.86007H12.25V10.9226Z"></path>
                                        <path d="M2.625 8.96875H4.8125V9.84375H2.625V8.96875Z"></path>
                                        <path d="M9.1875 8.96875H11.375V9.84375H9.1875V8.96875Z"></path>
                                        <path d="M7 0.403564L0.4375 3.03849V3.98139L7 1.34649L13.5625 3.98139V3.03849L7 0.403564Z"></path>
                                    </svg>

                                </span>
                                <?php echo $property['surface_garage'] ?> m²

                            </h3>


                            <h4 class="font-lora text-primary text-[24px] leading-[1.277] sm:text-[28px] capitalize mt-[50px] mb-[40px] font-medium">
                                Description de l'annonce<span class="text-secondary">.</span>
                            </h4>

                            <p> <?php echo $property['description'] ?></p>
                        </div>





                        <h4 class="font-lora text-primary text-[24px] leading-[1.277] sm:text-[28px] capitalize mt-[50px] mb-[40px] font-medium">
                            Détails de l'annonce<span class="text-secondary">.</span>
                        </h4>




                        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 px-[15px] mx-[-15px] mt-[40px]">
                            <li class="flex flex-wrap items-center mb-[25px]">
                                <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                <span><?php echo $property["nb_etage"] ?> Etage(s) disponible(s)</span>
                            </li>

                            <?php


                            $exterieur = $model->read_filter_once("exterieur_annonce", "*", "annonce", $property["id"]);

                            while ($ext = $exterieur->fetch()) {
                                $ex = $model->read_filter_once("exterieur", "*", "id", $ext["exterieur"]);
                                $e = $ex->fetch();

                                echo ('<li class="flex flex-wrap items-center mb-[25px]">
                    <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                    <span>' . $e["nom"] . '</span>

                </li>');
                            }

                            $interieur = $model->read_filter_once("interieur_annonce", "*", "annonce", $property["id"]);

                            while ($int = $interieur->fetch()) {
                                $in = $model->read_filter_once("interieur", "*", "id", $int["interieur"]);
                                $i = $in->fetch();

                                echo ('<li class="flex flex-wrap items-center mb-[25px]">
                    <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                    <span>' . $i["nom"] . '</span>

                </li>');
                            }
                            ?>
                            <?php
                            $utilitaire = $model->read_filter_once("utilitaire_annonce", "*", "annonce", $property["id"]);

                            while ($util = $utilitaire->fetch()) {
                                $uti = $model->read_filter_once("utilitaire", "*", "id", $util["utilitaire"]);
                                $u = $in->fetch();

                                echo ('<li class="flex flex-wrap items-center mb-[25px]">
                                <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                <span>' . $i["nom"] . '</span>

                            </li>');
                            }
                            ?>

                            <?php
                            $careteristique = $model->read_filter_once("carac_plus_annonce", "*", "annonce", $property["id"]);

                            while ($carac = $careteristique->fetch()) {
                                $cara = $model->read_filter_once("carac_plus", "*", "id", $carac["carac_plus"]);
                                $car = $cara->fetch();

                                echo ('<li class="flex flex-wrap items-center mb-[25px]">
                                <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                <span>' . $car["nom"] . '</span>

                            </li>');
                            }
                            ?>



                        </ul>


                        </ul>
                        <!--   <h5 class="font-lora text-primary text-[24px] sm:text-[28px] leading-[1.277] capitalize lg:mt-[25px] mb-[40px] font-medium">

                            Floor Plan<span class="text-secondary">.</span>
                        </h5>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-[30px]">
                            <div class="text-center">
                                <img src="assets/images/floor-plan/floor1.png" alt="Floor Plan">
                                <p>Ground floor</p>
                            </div>

                            <div class="text-center">
                                <img src="assets/images/floor-plan/floor3.png" alt="Floor Plan">
                                <p>1st Floor</p>
                            </div>
                        </div> -->
                         
                        <div class="grid grid-cols-12 mt-[70px]">
                            
                           


                            <div class="col-span-12">
                               

                                <h2 class="font-lora text-primary text-[24px] sm:text-[28px] capitalize nt-[80px] lg:mt-[90px] font-medium">
                                  Envoyer un mail<span class="text-secondary">.</span>
                                </h2>
                                <div class="mt-[60px]">
                                    <form action="#" class="grid grid-cols-12 gap-x-[20px] gap-y-[30px]">

                                        <div class="col-span-12 md:col-span-6">
                                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Votre Nom">
                                        </div>

                                        <div class="col-span-12 md:col-span-6">
                                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Votre prénom">
                                        </div>



                                        <div class="col-span-12 md:col-span-12">
                                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="email" placeholder="Email">
                                        </div>

                                        <div class="col-span-12">
                                            <textarea class="h-[196px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none" name="textarea" id="textarea" cols="30" rows="10" placeholder="Message"></textarea>
                                        </div>

                                        <div class="col-span-12">
                                            <button type="submit" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[15px] capitalize font-medium text-white block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all"> Envoyer message</button>
                                        </div>

                                    </form>



                                </div>
                            </div>

                        </div>
 
                    </div>

                    <div class="col-span-12 md:col-span-6 lg:col-span-4 mb-[30px]">
                        <aside class="mb-[-40px] asidebar">
                            <!--  <div class="bg-[#F5F9F8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                                <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[30px] font-medium">Property Search <span class="text-secondary">.</span></h3>

                                <form action="#" class="relative">
                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white" type="text" placeholder="Location">
                                        <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.39648 6.41666H8.60482" stroke="#016450" stroke-width="1.5" stroke-linecap="round" />
                                            <path d="M7 8.02083V4.8125" stroke="#016450" stroke-width="1.5" stroke-linecap="round" />
                                            <path d="M2.11231 4.9525C3.26148 -0.0991679 10.7456 -0.0933345 11.889 4.95833C12.5598 7.92167 10.7165 10.43 9.10064 11.9817C7.92814 13.1133 6.07314 13.1133 4.89481 11.9817C3.28481 10.43 1.44148 7.91583 2.11231 4.9525Z" stroke="#016450" stroke-width="1.5" />
                                        </svg>
                                    </div>

                                    <div class="relative mb-[25px] bg-white">
                                        <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_928_754)">
                                                <path d="M4.64311 0H0V4.64311H4.64311V0ZM3.71437 3.71437H0.928741V0.928741H3.71437V3.71437Z" fill="#016450" />
                                                <path d="M8.35742 0V4.64311H13.0005V0H8.35742ZM12.0718 3.71437H9.28616V0.928741H12.0718V3.71437Z" fill="#016450" />
                                                <path d="M0 13H4.64311V8.35689H0V13ZM0.928741 9.28563H3.71437V12.0713H0.928741V9.28563Z" fill="#016450" />
                                                <path d="M8.35742 13H13.0005V8.35689H8.35742V13ZM9.28616 9.28563H12.0718V12.0713H9.28616V9.28563Z" fill="#016450" />
                                                <path d="M6.96437 0H6.03563V6.03563H0V6.96437H6.03563V13H6.96437V6.96437H13V6.03563H6.96437V0Z" fill="#016450" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_928_754">
                                                    <rect width="13" height="13" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <select class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                            <option value="0">Property Category</option>
                                            <option value="1">Property</option>
                                            <option value="2">Category</option>
                                        </select>
                                    </div>

                                    <div class="relative mb-[25px] bg-white">
                                        <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.16602 12.8333H12.8327" stroke="#01614E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1.7207 12.8333L1.74987 5.81583C1.74987 5.45999 1.91904 5.12169 2.19904 4.90002L6.28237 1.72085C6.70237 1.39418 7.29154 1.39418 7.71737 1.72085L11.8007 4.89418C12.0865 5.11585 12.2499 5.45416 12.2499 5.81583V12.8333" stroke="#01614E" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round" />
                                            <path d="M9.04232 6.41666H4.95898C4.47482 6.41666 4.08398 6.8075 4.08398 7.29166V12.8333H9.91732V7.29166C9.91732 6.8075 9.52648 6.41666 9.04232 6.41666Z" stroke="#01614E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5.83398 9.47916V10.3542" stroke="#01614E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6.125 4.375H7.875" stroke="#01614E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                        <select class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                            <option value="0">Property Type</option>
                                            <option value="1">Property A</option>
                                            <option value="2">Category B</option>
                                        </select>
                                    </div>


                                    <div class="relative mb-[25px] bg-white">
                                        <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.78125 9.55323C5.78125 10.4132 6.44125 11.1066 7.26125 11.1066H8.93458C9.64792 11.1066 10.2279 10.4999 10.2279 9.75323C10.2279 8.9399 9.87458 8.65323 9.34792 8.46657L6.66125 7.53323C6.13458 7.34657 5.78125 7.0599 5.78125 6.24657C5.78125 5.4999 6.36125 4.89323 7.07458 4.89323H8.74792C9.56792 4.89323 10.2279 5.58657 10.2279 6.44657" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 4V12" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.9987 14.6667C11.6806 14.6667 14.6654 11.6819 14.6654 8C14.6654 4.3181 11.6806 1.33333 7.9987 1.33333C4.3168 1.33333 1.33203 4.3181 1.33203 8C1.33203 11.6819 4.3168 14.6667 7.9987 14.6667Z" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <select class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                            <option selected value="0">Price Range</option>
                                            <option value="1">1500 usd</option>
                                            <option value="2">1600 usd</option>
                                        </select>
                                    </div>

                                    <div class="relative mb-[25px] bg-white">
                                        <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.33268 4.66667H4.66602V9.33334H9.33268V4.66667Z" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M2.91602 12.8333C3.87852 12.8333 4.66602 12.0458 4.66602 11.0833V9.33333H2.91602C1.95352 9.33333 1.16602 10.1208 1.16602 11.0833C1.16602 12.0458 1.95352 12.8333 2.91602 12.8333Z" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M2.91602 4.66667H4.66602V2.91667C4.66602 1.95417 3.87852 1.16667 2.91602 1.16667C1.95352 1.16667 1.16602 1.95417 1.16602 2.91667C1.16602 3.87917 1.95352 4.66667 2.91602 4.66667Z" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.33398 4.66667H11.084C12.0465 4.66667 12.834 3.87917 12.834 2.91667C12.834 1.95417 12.0465 1.16667 11.084 1.16667C10.1215 1.16667 9.33398 1.95417 9.33398 2.91667V4.66667Z" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.084 12.8333C12.0465 12.8333 12.834 12.0458 12.834 11.0833C12.834 10.1208 12.0465 9.33333 11.084 9.33333H9.33398V11.0833C9.33398 12.0458 10.1215 12.8333 11.084 12.8333Z" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <select class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                            <option selected value="0">Property Size</option>
                                            <option value="1">1500 squre fit</option>
                                            <option value="2">1600 squre fit</option>
                                        </select>
                                    </div>


                                    <button type="submit" class="block z-[1] before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:z-[-1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:z-[-2] after:bg-primary after:rounded-md after:transition-all">Search</button>

                                </form>
                            </div> -->

                            <div class="bg-[#f5f9f8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                                <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[30px] font-medium">Propriétés récentes<span class="text-secondary">.</span></h3>
                                <div class="sidebar-carousel relative">
                                    <div class="swiper">

                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">

                                                <?php

                                                $payload = $model->read('annonce', '*', 4, 'id', 'true');

                                                while ($property = $payload->fetch()) {

                                                    $statut_payload = $model->read_filter_once('categorie_action', '*', 'id', $property['statut']);
                                                    $statut = $statut_payload->fetch();

                                                    $type_payload = $model->read_filter_once('type_annonce', '*', 'id', $property['type_annonce']);
                                                    $type = $type_payload->fetch();

                                                    $categorie_payload = $model->read_filter_once('categorie', '*', 'id', $property['categorie_annonce']);
                                                    $categorie = $categorie_payload->fetch();

                                                    $pic_count = $model->countAll("image_annonce", "*", "annonce", $property['id']);
                                                    $pic_payload = $model->read_filter_once("image_annonce", "*", "annonce", $property['id']);
                                                    $pics = [];
                                                    while ($line = $pic_payload->fetch()) {

                                                        array_push($pics, $line['img']);
                                                    }

                                                    echo ('
            
            <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
            <div class="relative">

            
                <a href="details.php?property=' . $property['slug'] . '" class="block">
                
                    <img src="app/media/properties/images/' . $pics[0] . '" class="w-full h-full" loading="lazy" width="370" height="266" alt="">
                </a>
                <div class="flex flex-wrap flex-col absolute top-5 right-5">
                    <button class="flex flex-wrap items-center bg-[rgb(1,97,78,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">' . $pic_count . '</button>
                </div>
                <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-secondary leading-none text-[14px] font-normal capitalize">
                ' . $type['nom'] . ' | ' . $statut['nom'] . ' | ' . $categorie['nom'] . '
                </span>
                
                
            </div>

            <div class="py-[20px] px-[20px]">
                <h3><a href="details.php?property=' . $property['slug'] . '" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">' . $property['titre'] . '.</a></h3>
                <h4><a href="details.php?property=' . $property['slug'] . '" class="font-light text-tiny text-secondary underline">' . $property['adresse'] . '</a></h4>
                <span class="font-light text-sm">Added: 25 November, 2021</span>
                <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-lora text-base text-primary px-[15px] bg-white font-medium">Prix: ' . $property['prix'] . ' ' . $property['devise'] . ' ' . $property['etiquette_duree'] . '</span></div>
                <p class="font-light">' . $property['surface'] . ' m² - ' . $property['chambres'] . ' chambres - ' . $property['salle_bain'] . ' Bains - ' . $property['nb_piece'] . ' Pieces</p>
            </div>
        </div>             
        
        

            
            ');
                                                }

                                                ?>


                                            </div>

                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="flex flex-wrap items-center justify-center mt-[25px]">
                                        <div class="swiper-button-prev w-[26px] h-[26px] rounded-full bg-primary  text-white hover:bg-secondary static mx-[5px] mt-[0px]">
                                        </div>
                                        <div class="swiper-button-next w-[26px] h-[26px] rounded-full bg-primary  text-white hover:bg-secondary static mx-[5px] mt-[0px]">
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!--   <div class="bg-[#f5f9f8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                                <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[30px] font-medium">Our Agents<span class="text-secondary">.</span></h3>

                                <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-x-[20px] mb-[-20px]"> -->
                            <!-- single team start -->
                            <!--  <div class="text-center group mb-[30px]">
                                        <div class="relative z-[1] rounded-[6px_6px_0px_0px]">
                                            <a href="agent-details.html" class="block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-[#016450] before:w-full before:h-[calc(100%_-_30px)] before:z-[-1] before:rounded-[6px_6px_0px_0px]">
                                                <img src="assets/images/team/sm/person1.png" class="max-w-[130px] max-h-[154px] object-contain block mx-auto" loading="lazy" width="130" height="154" alt="Albert S. Smith">
                                            </a>
                                        </div>

                                        <div class="bg-[#FFFDFC] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-[10px] pt-[5px] pb-[15px] border-b-[6px] border-primary transition-all duration-700 group-hover:border-secondary">
                                            <h3><a href="agent-details.html" class="font-lora text-[14px] text-primary hover:text-secondary">Albert S. Smith</a></h3>
                                            <p class="font-light text-[12px] leading-none capitalize mt-[5px]">Real Estate Agent</p>
                                        </div>
                                    </div>
                                    <div class="text-center group mb-[30px]">
                                        <div class="relative z-[1] rounded-[6px_6px_0px_0px]">
                                            <a href="agent-details.html" class="block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-[#016450] before:w-full before:h-[calc(100%_-_30px)] before:z-[-1] before:rounded-[6px_6px_0px_0px]">
                                                <img src="assets/images/team/sm/person2.png" class="max-w-[130px] max-h-[154px] object-contain block mx-auto" loading="lazy" width="130" height="154" alt="Amelia Margaret">
                                            </a>
                                        </div>

                                        <div class="bg-[#FFFDFC] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-[10px] pt-[5px] pb-[15px] border-b-[6px] border-primary transition-all duration-700 group-hover:border-secondary">
                                            <h3><a href="agent-details.html" class="font-lora text-[14px] text-primary hover:text-secondary">Amelia Margaret</a></h3>
                                            <p class="font-light text-[12px] leading-none capitalize mt-[5px]">Real Estate Broker</p>
                                        </div>
                                    </div>
                                    <div class="text-center group mb-[30px]">
                                        <div class="relative z-[1] rounded-[6px_6px_0px_0px]">
                                            <a href="agent-details.html" class="block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-[#016450] before:w-full before:h-[calc(100%_-_30px)] before:z-[-1] before:rounded-[6px_6px_0px_0px]">
                                                <img src="assets/images/team/sm/person3.png" class="max-w-[130px] max-h-[154px] object-contain block mx-auto" loading="lazy" width="130" height="154" alt="Stephen Kelvin">
                                            </a>
                                        </div>

                                        <div class="bg-[#FFFDFC] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-[10px] pt-[5px] pb-[15px] border-b-[6px] border-primary transition-all duration-700 group-hover:border-secondary">
                                            <h3><a href="agent-details.html" class="font-lora text-[14px] text-primary hover:text-secondary">Stephen Kelvin</a></h3>
                                            <p class="font-light text-[12px] leading-none capitalize mt-[5px]">Real Estate Agent</p>
                                        </div>
                                    </div>
                                    <div class="text-center group mb-[30px]">
                                        <div class="relative z-[1] rounded-[6px_6px_0px_0px]">
                                            <a href="agent-details.html" class="block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-[#016450] before:w-full before:h-[calc(100%_-_30px)] before:z-[-1] before:rounded-[6px_6px_0px_0px]">
                                                <img src="assets/images/team/sm/person4.png" class="max-w-[130px] max-h-[154px] object-contain block mx-auto" loading="lazy" width="130" height="154" alt=" Michael Richard">
                                            </a>
                                        </div>

                                        <div class="bg-[#FFFDFC] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-[10px] pt-[5px] pb-[15px] border-b-[6px] border-primary transition-all duration-700 group-hover:border-secondary">
                                            <h3><a href="agent-details.html" class="font-lora text-[14px] text-primary hover:text-secondary"> Michael Richard</a></h3>
                                            <p class="font-light text-[12px] leading-none capitalize mt-[5px]">Real Estate Broker</p>
                                        </div>
                                    </div> -->

                            <!-- single team end-->
                            <!-- </div>
                            </div> -->

                            <!--  <div class="bg-[#f5f9f8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                                <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[30px] font-medium">Tags<span class="text-secondary">.</span></h3>
                                <ul class="flex flex-wrap my-[-7px] mx-[-5px] font-light text-[12px]">
                                    <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Real Estate</a>
                                    </li>
                                    <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Appartment</a>
                                    </li>
                                    <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Sale Property</a>
                                    </li>
                                    <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Duplex</a>
                                    </li>
                                    <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Buy Property</a>
                                    </li>
                                    <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Houses</a>
                                    </li>

                                </ul>
                            </div> -->
                        </aside>
                    </div> -->
                </div>

            </div>
        </section>
        <!-- Popular Properties end -->




        <!-- Brand section Start-->
        <!-- 
        <div class="brand-section">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="brand-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                  
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="assets/images/brand/brand1.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="assets/images/brand/brand2.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="assets/images/brand/brand3.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="assets/images/brand/brand4.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="assets/images/brand/brand5.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="assets/images/brand/brand3.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                        </a>
                                    </div>

                                   
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 -->
        <!-- Brand section End-->



        <!-- News Letter section start -->
        <?php include('partial/newsletter.php') ?>
        <!-- News Letter section End -->


        <!-- Footer Start -->
        <?php include('partial/footer.php') ?>

        <!-- Footer End -->
        <a id="scrollUp" class="w-12 h-12 rounded-full bg-primary text-white fixed right-5 bottom-16 flex flex-wrap items-center justify-center transition-all duration-300 z-10" href="#" aria-label="scroll up">

            <svg width="25" height="25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M6.101 261.899L25.9 281.698c4.686 4.686 12.284 4.686 16.971 0L198 126.568V468c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12V126.568l155.13 155.13c4.686 4.686 12.284 4.686 16.971 0l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L232.485 35.515c-4.686-4.686-12.284-4.686-16.971 0L6.101 244.929c-4.687 4.686-4.687 12.284 0 16.97z" />
            </svg>

        </a>
    </div>



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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>

    <!-- Activation JS -->
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,

            navSpeed: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
</body>

</html>