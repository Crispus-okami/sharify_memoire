<div class="container">
    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <div class="flex flex-wrap items-center justify-between">
                <a href="index.php" class="block">
                    <img class="w-full h-full" src="assets/images/logo/logo.svg" loading="lazy" width="99" height="46" alt="brand logo">
                </a>
                <nav class="flex flex-wrap items-center">
                    <ul class="hidden lg:flex flex-wrap items-center font-lora text-[16px] xl:text-[18px] leading-none text-black">
                        <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                            <a href="categorie.php?categorie=1" class="transition-all hover:text-secondary">A Louer</a>

                        </li>

                        <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                            <a href="categorie.php?categorie=2" class="transition-all hover:text-secondary">A Vendre</a>

                        </li>
                        <!--             <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                            <a href="#" class="transition-all hover:text-secondary">Vacances</a>

                        </li>
                        <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                            <a href="#" class="transition-all hover:text-secondary">Prestige</a>

                        </li> -->
                        <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                            <a href="categorie.php?type=1" class="transition-all hover:text-secondary">Neuf</a>

                        </li>

                        <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                            <a href="categorie.php?type=3" class="transition-all hover:text-secondary">Offre chaude</a>

                        </li>
                        <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                            <a href="#" class="transition-all hover:text-secondary">Actualités & Conseils</a>

                        </li>

                    </ul>



                    <ul class="flex flex-wrap items-center">

                        <?php

                       
                        if (!empty($_SESSION['id'])) {

                            echo ('<li class="sm:mr-5 xl:mr-[20px] relative group"><a href="#">
        <img src="app/media/users/profiles/'.$_SESSION['profile'].'" loading="lazy" width="62" height="62" alt="avater">
    </a>

    <ul class="list-none bg-white drop-shadow-[0px_6px_10px_rgba(0,0,0,0.2)] rounded-[12px] flex flex-wrap flex-col w-[180px] absolute top-[120%] sm:left-1/2 sm:-translate-x-1/2 transition-all
group-hover:top-[60px] invisible group-hover:visible opacity-0 group-hover:opacity-100 right-0

">
        <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
            <a href="dashboard/" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-t-[12px]">
                Dashborad</a>
        </li>

        <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
            <a href="dashboard/profile.php" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-b-[12px]">Mon profil</a>
        </li>




        <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
            <a href="dashboard/annonces.php" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-b-[12px]">Mes Annonces</a>
        </li>


        <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
            <a href="add-property.php" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-b-[12px]">Ajouter une annonce</a>
        </li>


        <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
            <a href="" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-b-[12px]">Mes favoris</a>
        </li>


        <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
            <a href="" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-b-[12px]">Recherche sauvegarder</a>
        </li>

        <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
            <a href="" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-b-[12px]">Mes factures</a>
        </li>

        <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
            <a href="r" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-b-[12px]">Inbox</a>
        </li>


        <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
            <a href="" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-b-[12px]">CRM</a>
        </li>


        <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
            <a href="app/lib/process.php?process=logout" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-b-[12px]">Se déconnecter</a>
        </li>

    </ul>
</li>');
                        } else {
                            echo ('<li class="sm:mr-5 xl:mr-[20px] relative group"><a href="#">
    <img src="assets/images/user/avater.png" loading="lazy" width="62" height="62" alt="avater">
</a>

<ul class="list-none bg-white drop-shadow-[0px_6px_10px_rgba(0,0,0,0.2)] rounded-[12px] flex flex-wrap flex-col w-[180px] absolute top-[120%] sm:left-1/2 sm:-translate-x-1/2 transition-all
group-hover:top-[60px] invisible group-hover:visible opacity-0 group-hover:opacity-100 right-0

">
    <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
        <a href="login.php" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-t-[12px]">Se
            connecter</a>
    </li>

    <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
        <a href="register.php" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-b-[12px]">S\'inscrire</a>
    </li>


</ul>
</li>');
                        }

                        ?>


                        <li>
                            <a href="add-properties.php" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white hidden sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">
                                Déposer une annonce
                            </a>
                        </li>
                        <li class="ml-2 sm:ml-5 lg:hidden">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle flex text-[#016450] hover:text-secondary">
                                <svg width="24" height="24" class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>