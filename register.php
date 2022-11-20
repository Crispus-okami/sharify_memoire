<?php
    session_start();
    require('app/lib/methods.php');
    if(is_authenticate()){
        /* header('location:index.php'); */
    }

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


    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />

</head>


<body class="font-karla text-body text-tiny">
    <div class="overflow-x-hidden">


        <!-- Header start -->
        <?php include(__DIR__ . '/partial/header2.php') ?>
        <!-- Header end -->


        <!-- Hero section start -->

        <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('assets/images/breadcrumb/bg-1.png');">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                            <div class="mb-5"><span class="text-base block">Inscription</span></div>
                            <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                                Inscrivez vous maintenant
                            </h1>

                            <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                                Retrouvez les meilleures opportunités
                                immobilières partout dans le monde.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hero section end -->

        <!-- contact form start -->

        <div class="py-[80px] lg:py-[120px]">
            <div class="container">
                <form method="POST" action="app/lib/process.php?process=register">
                    <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px]">
                        <div class="col-span-12 lg:col-span-6 mb-[30px]">
                            <h2 class="font-lora text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl mb-[15px] font-medium">
                                Créer un compte<span class="text-secondary">.</span></h2>


                            <div class="grid grid-cols-12 gap-x-[20px] gap-y-[35px]">

                                <div class="col-span-12">
                                    <input name="username" class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Nom d'utilisateur">
                                </div>

                                <div class="col-span-12">
                                    <input name="email" class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="email" placeholder="Email">
                                </div>

                                <div class="col-span-12">
                                    <input name="ville" class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Ville">
                                </div>


                                <div class="col-span-12">
                                    <select name="type" class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] "  placeholder="Choisissez vôtre profil">
                                    <option  disabled selected>Choisissez votre profil </option>
                                    <option value="1">Particulier</option>
                                    <option value="2">Professionnel</option>
                                </select>
                                </div>

                                <div class="col-span-12">
                                <small id="sp" style="color:red"></small>
                                </div>

                                <div class="col-span-12">
                                    <input name="password" id="p1" class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="password" placeholder="Mot de passe">

                                </div>

                                <div class="col-span-12">
                                    <input name="confirm" id="p2" class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="password" placeholder="Confirmer le mot de passe">

                                    <div class="flex flex-wrap items-center justify-between w-full sm:w-[400px]">
                                        <div class="flex flex-wrap mt-[15px] items-center">
                                            <input type="checkbox" id="checkbox1" name="term">
                                            <label for="checkbox1" class="ml-[5px] cursor-pointer"> Je suis d'accord avec les
                                                <a href="#" class="underline text-secondary">Termes &
                                                    Conditions</a></label><br>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-span-12">
                                    <div class="flex flex-wrap items-center">
                                        <button type="submit" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[40px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">S'inscrire</button>

                                        <p class="ml-[40px]">Vous avez déjà un compte ? <a href="login.php" class="text-secondary">Connectez-vous</a></p>

                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class="col-span-12 lg:col-span-6 mb-[30px]">
                            <img src="assets/images/contact/image2.png" class="w-full lg:max-w-[538px] h-auto rounded-[10px]" width="546" height="668" alt="image">
                        </div>
                    </div>
                </form>

            </div>
        </div>


        <!-- Brand section Start-->

     <!--    <div class="brand-section">
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
        <?php include(__DIR__ .'/partial/newsletter.php') ?>
        <!-- News Letter section End -->


        <!-- Footer Start -->
        <?php include(__DIR__ .'/partial/footer.php') ?>
        <!-- Footer End -->
        <a id="scrollUp" class="w-12 h-12 rounded-full bg-primary text-white fixed right-5 bottom-16 flex flex-wrap items-center justify-center transition-all duration-300 z-10" href="#" aria-label="scroll up">

            <svg width="25" height="25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M6.101 261.899L25.9 281.698c4.686 4.686 12.284 4.686 16.971 0L198 126.568V468c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12V126.568l155.13 155.13c4.686 4.686 12.284 4.686 16.971 0l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L232.485 35.515c-4.686-4.686-12.284-4.686-16.971 0L6.101 244.929c-4.687 4.686-4.687 12.284 0 16.97z" />
            </svg>

        </a>
    </div>


    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="public/main.js"></script>
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

    <!-- Activation JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>