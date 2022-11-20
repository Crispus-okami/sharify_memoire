

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
        <!-- header top start -->
       
        <!-- header top end -->

        <!-- Header start -->

        <?php
            require('partial/header2.php');
        ?>
        <!-- offcanvas-overlay start -->
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
                            <div class="mb-5"><span class="text-base block"></span></div>
                            <h1 class="font-lora text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                                Nos Propriétés
                            </h1>

                           <!--  <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                                Huge number of propreties availabe here for buy and sell
                                also you can find here co-living property as you like
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hero section end -->

        <!-- Popular Properties start -->
        <section class="popular-properties py-[80px] lg:py-[120px]">
            <div class="container">
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">

                <?php
                require('app/database/models.php');
                $model = new model();
   

  


        $payload = $model->read('annonce', '*');

        while ($property = $payload->fetch()) {

            $statut_payload = $model->read_filter_once('categorie_action', '*', 'id', $property['statut']);
            $statut = $statut_payload->fetch();
            
            $type_payload = $model->read_filter_once('type_annonce', '*', 'id', $property['type_annonce']);
            $type = $type_payload->fetch();

            $categorie_payload = $model->read_filter_once('categorie', '*', 'id', $property['categorie_annonce']);
            $categorie = $categorie_payload->fetch();

            $pic_count = $model->countAll("image_annonce", "*", "annonce", $property['id']);
            $pic_payload = $model->read_filter_once("image_annonce", "*", "annonce", $property['id']);
            $pics=[];
            while($line=$pic_payload->fetch()){

                array_push($pics, $line['img']);

            }

            echo ('
                    
                    <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                    <div class="relative">

                    
                        <a href="details.php?property='. $property['slug'] .'" class="block">
                        
                            <img src="app/media/properties/images/'.$pics[0].'" class="w-full h-full" loading="lazy" width="370" height="266" alt="">
                        </a>
                        <div class="flex flex-wrap flex-col absolute top-5 right-5">
                            <button class="flex flex-wrap items-center bg-[rgb(1,97,78,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">'.$pic_count.'</button>
                        </div>
                        <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-secondary leading-none text-[14px] font-normal capitalize">
                        '.$type['nom'].' | '.$statut['nom'].' | '.$categorie['nom'].'
                        </span>
                        
                        
                    </div>

                    <div class="py-[20px] px-[20px]">
                        <h3><a href="details.php?property='. $property['slug'] .'" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">' . $property['titre'] . '.</a></h3>
                        <h4><a href="details.php?property='. $property['slug'] .'" class="font-light text-tiny text-secondary underline">' . $property['adresse'] . '</a></h4>
                        <span class="font-light text-sm">Added: 25 November, 2021</span>
                        <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-lora text-base text-primary px-[15px] bg-white font-medium">Prix: ' . $property['prix'] . ' ' . $property['devise'] . ' ' . $property['etiquette_duree'] . '</span></div>
                        <p class="font-light">' . $property['surface'] . ' m² - ' . $property['chambres'] . ' chambres - ' . $property['salle_bain'] . ' Bains - ' . $property['nb_piece'] . ' Pieces</p>
                    </div>
                </div>                                
                        
                    
                    ');
        }


        
  
?>
                   
                </div>
                <div class="grid grid-cols-12 mt-[50px] gap-[30px]">
                  <!--   <div class="col-span-12">
                        <ul class="pagination flex flex-wrap items-center justify-center">

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] bg-primary rounded-full text-orange leading-none transition-all hover:bg-secondary text-white text-[12px]" href="#">
                                    <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_876_580)">
                                            <path d="M5.8853 10.0592C5.7326 10.212 5.48474 10.212 5.33204 10.0592L0.636322 5.36134C0.48362 5.20856 0.48362 4.96059 0.636322 4.80782L5.33204 0.109909C5.48749 -0.0403413 5.73535 -0.0359829 5.8853 0.119544C6.03181 0.271171 6.03181 0.511801 5.8853 0.663428L1.46633 5.08446L5.8853 9.50573C6.03823 9.65873 6.03823 9.90648 5.8853 10.0592Z" fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_876_580">
                                                <rect width="5.47826" height="10.1739" fill="white" transform="matrix(-1 0 0 1 6 0)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">1</a>
                            </li>

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">2</a>
                            </li>

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">3</a>
                            </li>

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">4</a>
                            </li>

                            <li class="mx-2">
                                <span>---</span>
                            </li>

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">25</a>
                            </li>

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] bg-primary rounded-full text-orange leading-none transition-all hover:bg-secondary text-white text-[12px]" href="#">
                                    <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_876_576)">
                                            <path d="M0.114699 10.0592C0.267401 10.212 0.515257 10.212 0.667959 10.0592L5.36368 5.36134C5.51638 5.20856 5.51638 4.96059 5.36368 4.80782L0.667959 0.109909C0.512505 -0.0403413 0.26465 -0.0359829 0.114699 0.119544C-0.031813 0.271171 -0.031813 0.511801 0.114699 0.663428L4.53367 5.08446L0.114699 9.50573C-0.038233 9.65873 -0.038233 9.90648 0.114699 10.0592Z" fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_876_576">
                                                <rect width="5.47826" height="10.1739" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                        </ul>


                    </div> -->
                </div>
            </div>
        </section>
        <!-- Popular Properties end -->


            

        <!-- Brand section Start-->

        <!-- <div class="brand-section">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="mb-[60px]">
                            <span class="text-secondary text-tiny inline-block mb-2">Our Partner’s</span>
                            <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">
                                Reliable Partner’s<span class="text-secondary">.</span></h2>
                        </div>
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
        <?php
            require('partial/newsletter.php');
        ?>
        <!-- News Letter section End -->


        <!-- Footer Start -->
    
        <?php
            require('partial/footer.php');
        ?>

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

    <!-- Activation JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>