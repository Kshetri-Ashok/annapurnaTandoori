<?php
require_once('./Schema.php');

$schema = new SchemaDAO();
$entrante = $schema->entrante();
$RecomandacionSizzler = $schema->RecomendacionChefSizzler();
$RecomandacionCurry = $schema->RecomendacionCurry();
$PlatoCurry = $schema->PlatoCurry();
$HornoTandoori = $schema->HornoTandoori();
$PlatosTikkaMasala = $schema->PlatosTikkaMasala();
$PlatosKorma = $schema->PlatosKorma();
$PlatosPasanda = $schema->PlatosPasanda();
$platos_karahi = $schema->platos_karahi();
$platos_jalfrezi = $schema->platos_jalfrezi();
$platos_espinaca = $schema->platos_espinaca();
$platos_bhuna = $schema->platos_bhuna();
$postres = $schema->postres();
$alergenos = $schema->alergenos();
$menu_degustacion = $schema->menu_degustacion();
$menu_degustacion_precio = $schema->menu_degustacion_precio();
$platos_balti = $schema->platos_balti();
$platos_dansak = $schema->platos_dansak();
$platos_madras = $schema->platos_madras();
$platos_vindaloo = $schema->platos_vindaloo();
$pan = $schema->pan();
$platos_basmati = $schema->platos_basmati();
$platos_verduras = $schema->platos_verduras();
$platos_biryani = $schema->platos_biryani();
$menu_para_niños = $schema->menu_para_niños();
$menu_para_niños_precio = $schema->menu_para_niños_precio();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="../../css/Menuphp-style.php">

    <style>

    </style>
</head>

<body>

    <header style="border: none;">
        <div class="Tabs">
            <button data-tab-target="#Entrante"><span>Entrantes</span></button>
            <button data-tab-target="#Sizzler_Curry"> <span>Surgencias de chef Sizzler y Curry</span> </button>
            <button data-tab-target="#Horno_tandoori"> <span> Platos Curry y Horno Tandoori</span></button>
            <button data-tab-target="#KormaTikkaPasanda"> <span>Platos Tikka masala, korma y pasanda</span></button>
            <button data-tab-target="#KarahiJalfrezi"><span>Platos Karahi, Jalfrezi, Espinaca y Bhuna</span> </button>
            <button data-tab-target="#BaltiDansakMás"> <span>Platos Balti, Dansak, Madras y Vindaloo</span></button>
            <button data-tab-target="#MenuNiño"> <span>Platos Verduras, Briyani y Menu para Niños</span> </button>
            <button data-tab-target="#PanRice"> <span>Platos Basmati y Pan</span> </button>
            <button data-tab-target="#postres"> <span>Postres </span> </button>
            <button data-tab-target="#Menu_degustacion"> <span>Menu_especial</span> </button>
        </div>

    </header>

    <main style="border: none;">
        <div class="content">

            <div id="Entrante" class='tab'>
                <div class="file">
                    <h1>Entrantes</h1>
                    <?php
                    echo $entrante;

                    ?>
                </div>
            </div>

            <div id="Sizzler_Curry" class='tab'>
                <div class="file">
                    <h1>Surgencias del Chef de Sizzler</h1>
                    <h3>CHEFS RECOMMENDATION SIZZLER</h3>
                    <h4> Las platos tandoori son especials y estan marinados con hierbas frescas y especiales asados em el horno tandoori, servido sobre un plato caliente</h4>
                    <?php

                    echo $RecomandacionSizzler;
                    ?>
                    <h1>Surgencias del Chef de Curry</h1>
                    <h3>CHEFS RECOMMENDATION CURRY</h3>
                    <h5>Platos preparado con hirbas tradicionales en nuestra salsa casera</h5>
                    <?php

                    echo $RecomandacionCurry;
                    ?>
                </div>
            </div>
            <div id="Horno_tandoori" class='tab'>
                <div class="file">
                    <h2>Platos al Horno Tandoori</h2>
                    <?php
                    echo $HornoTandoori;
                    ?>
                    <h2>Platos Curry</h2>
                    <h3>Curry Dishes</h3>
                    <?php
                    echo $PlatoCurry;
                    ?>
                </div>
            </div>
            <div id="KormaTikkaPasanda" class='tab'>
                <div class="file">
                    <h1>Platos Tikka Masala</h1>
                    <h3>Tikka Masala Dishes</h3>
                    <h4>Nuestros platos tikka masala se elaboran con una sala cremosa de coco, almendras, nata fresca, especias y hiterbas aromdticas. (ALERGENOS: Frutos secos, Lacteos)
                    </h4>
                    <?php
                    echo $PlatosTikkaMasala;
                    ?>
                    <h1>Platos Korma</h1>
                    <h3>Korma Dishes</h3>
                    <h4>Nuestros platos korma se preparan con una suave salsa de anacardo, frutos secos, coco, almendras y nata fresca. (ALERGENOS: Frutos secos, Lacteos)</h4>
                    <?php
                    echo $PlatosKorma;
                    ?>
                    <h1>Platos Pasanda</h1>
                    <h3>Pasanda Dishes</h3>
                    <h4>Elaborados con salsa de tomate, almendras, cocktail de frutas y nata fresca. (ALERGENOS: Frutos secos, Lacteos,Sulfitos)</h4>
                    <?php
                    echo $PlatosPasanda;
                    ?>
                </div>
            </div>
            <div id="KarahiJalfrezi" class='tab'>
                <div class="file">
                    <h1>Platos Karahi</h1>
                    <h3>Karahi Dishes</h3>
                    <h4>Son platos exticos cocinados con tomate, pimiento rojo y verde, cebolla, semilfa de cilantro, fenogreco y nata fresca, (ALERGENOS: Frutos secos, Lacteos) (se puede pedir</h4>
                    <?php
                    echo $platos_karahi;
                    ?>
                    <h1>Platos Jalfrezi</h1>
                    <h3>Jalfrezi Dishes</h3>
                    <h4>Platos perparados con ajo , cebolla, tomate, pimiento rojo y verde (se puede pedir suave o picante) (ALERGENOS: Frutos secos, Lacteos)</h4>
                    <?php
                    echo $platos_jalfrezi;
                    ?>
                    <h1>Platos Espinaca</h1>
                    <h3>Saag Dishes</h3>
                    <h4>Se elaboran con salsa de espinacas con tomate y nata fresca. (Se puede pedir suave o picante). (ALERGENOS: Frutos secos, Lacteos)</h4>
                    <?php
                    echo $platos_espinaca;
                    ?>
                    <h1>Platos Bhuna</h1>
                    <h3>Bhuna Dishes</h3>
                    <h4>Preparado con una salsa densa de cebolla picada, pimiento verde y rojo, ajo, jengibre y tomate fresco. (Ge puede pedir suave o picante). (ALERGENOS: Frutos secos, Lacteos)</h4>
                    <?php
                    echo $platos_bhuna;
                    ?>

                </div>
            </div>
            <div id="postres" class='tab'>
                <div class="file">
                    <h1>Nuestros Postres Caseros</h1>
                    <h3>HOUSE DESERTS</h3>
                    <h4></h4>
                    <?php
                    echo $postres;
                    ?>
                    <h3>Alergenos</h3>


                    <div class="alergicos">
                        <?php
                        echo $alergenos;
                        ?>
                    </div>



                </div>
            </div>
            <div id="Menu_degustacion" class='tab'>
                <div class="file">
                    <h1>Menú Degustación</h1>
                    <?php
                    echo $menu_degustacion;
                    ?>


                    <div class="precio">
                        <?php
                        echo $menu_degustacion_precio;
                        ?>
                    </div>



                </div>
            </div>

            <div id="BaltiDansakMás" class='tab'>
                <div class="file">
                    <h2>Platos Balti</h2>
                    <h4>Platos Balti</h4>
                    <h5>Elaborado con tomate fresco, pimiento rojo y verde cebolla, ajo, Jengibre y salsa especial. (Se puede peidir suave o picante) (ALERGENOS: Frutos secos, Lacteos)</h5>
                    <?php


                    echo $platos_balti;
                    ?>
                    <h2>Platos Dansak
                    </h2>
                    <h4>Dansak Dishes
                    </h4>
                    <h5>Platos ligeramente agridulces preparados con lentejas amarillas, Lima, hierbas aromaticas y especias (ALERGENOS: Frutos secos, Lacteos)
                    </h5>
                    <?php
                    echo $platos_dansak;
                    ?>
                    <h2>Platos Madras</h2>
                    <h4>Madras Dishes</h4>
                    <h5>Platos muy populares y originarios del sur de india,preparados con coco, tomate fresco, cebolla, cilantro fresco y con una salsa picante (ALERGENOS: Frutos secos)</h5>
                    <?php
                    echo $platos_madras;
                    ?>
                    <h2>Platos Vindaloo</h2>
                    <h4>VANDALOO DISHES</h4>
                    <h5>Es un plato muy picante cde la zpna de goa, con exoticas patata y Lima (ALERGENOS: Frutos secos)</h5>
                    <?php
                    echo $platos_vindaloo;
                    ?>
                </div>
            </div>
            <div id="PanRice" class='tab'>
                <div class="file">
                    <h1>Platos Basmati</h1>
                    <h3>Basmati Rice
                    </h3>
                    <h4>El basmati es un tipo de arroz largo que se cultiva principalmente al sur de Himalaya su principal caracteristica es su intenso aroma natural.
                    </h4>
                    <?php

                    echo $platos_basmati;
                    ?>
                    <h1>Pan
                    </h1>
                    <h3>Naan Bread
                    </h3>
                    <?php
                    echo $pan;
                    ?>


                </div>
            </div>
            <div id="MenuNiño" class='tab'>
                <div class="file">
                    <h1>Platos Verduras</h1>
                    <h3>Vegetable Dishes</h3>
                    <?php

                    echo $platos_verduras;
                    ?>
                    <h1>Platos Biryani</h1>
                    <h3>Biryani Dishes</h3>
                    <h4>Arréz basmati Cocinado a fuego lento con frutos secos, cebolla, cardamomo azafran y otras especias, al que se pueden anadir los siguientes ingredientes. (ALERGENOS: Frutos secos)</h4>
                    <?php
                    echo $platos_biryani;
                    ?>
                    <h2>Menu para Niños</h2>
                    <h4>Kid's Menu</h4>
                    <h5>(ALERGENOS: Frutos secos, Lacteos)</h5>
                    <div class="container_detail_Menu_niños">
                        <?php

                        echo $menu_para_niños;
                        echo $menu_para_niños_precio;
                        ?>

                    </div>


                </div>
            </div>

        </div>
    </main>
    <div class="empty"></div>


    <footer>
        <div class="waves">
            <span class="wave" id="wave1"></span>
            <span class="wave" id="wave2"></span>
            <span class="wave" id="wave3"></span>
        </div>
        <style>
            ul li a i {
                transition: 1s;

            }

            ul li a i:hover {
                transform: translateY(-20px);
            }
        </style>

        <div class="footer-container">

            <nav class="nav-social">
                <ul class="icon-social">

                    <li class="social-media">
                        <a href="https://www.facebook.com/profile.php?id=100080562696136"><i style="font-size:24px" class="fa">&#xf09a;</i></a>
                    </li>

                    <li class="social-media">
                        <a href="https://www.tripadvisor.es/Restaurant_Review-g187514-d24011135-Reviews-Annapurna_Tandoori-Madrid.html" target="_blank"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                    </li>
                    <li class="social-media">
                        <a href="https://web.whatsapp.com/" target="_blank"><i style="font-size:24px" class="fa">&#xf232;</i></a>
                    </li>
                </ul>
            </nav>
            <nav class="nav-menu">

                <div class="Menu-contact">
                    <ul class="Menu-Navigation">
                        <li class="Menu-list"> <a href="../../index.html">home</a> </li>
                        <li class="Menu-list"><a href="../Booking.html">Reserva</a></li>
                        <li class="Menu-list"><a href="../Contact.html">Contacto</a></li>

                    </ul>
                </div>
                <div class="copy"><span>&copy; 2022 | Annapurna Tandoori</span></div>
            </nav>
        </div>
    </footer>


    <script>
        const tabs = document.querySelectorAll('[data-tab-target]');
        const tabcontent = document.querySelectorAll(".tab");
        // const tabslink = document.querySelectorAll("li");

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = document.querySelector(tab.dataset.tabTarget);
                tabcontent.forEach(content => {
                    content.classList.remove("active");

                })
                tabs.forEach(content => {
                    content.classList.remove("active");
                })
                target.classList.add('active');
                tab.classList.add('active');

            })


        });
        window.addEventListener('DOMContentLoaded', () => {
            document.querySelector("button:nth-child(1)").click();



        })
    </script>
</body>

</html>