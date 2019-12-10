<php? get_header(); ?>

<!-- <h1>Frontpage.php - Strona Główna</h1> -->

 <!--tytul  -->
 <h1>Publiczne Salezjanskie Liceum Ogolnokasztalce w Krakowie</h1>

<!-- naglowek -->
<header>
    <a href="#">zaloguj sie</a>
    <a href="#">Logo</a>
</header>

<!-- nawigacja -->
<nav>
    <h2>Linki</h2>
    <ul>
        <li><a href="#">Librus</a></li>
        <li><a href="#">Cisco</a></li>
        <li><a href="#">osiagniecia</a></li>
        <li><a href="#">Zycie szkoly</a></li>
        <li><a href="#">Rekrutacja 2020</a></li>

    </ul>
</nav>

<!--  -->
<nav>
    <h2>Menu Główne</h2>
    <ul>
        <li><a href="#">o szkole</a></li>
        <li><a href="#">o nas</a></li>
        <li><a href="#">o nauce</a></li>
        <li><a href="#">o osiagniecia</a></li>

    </ul>
</nav>

<section>
    <h2>Ogloszenia</h2>

     <?php
    
    // $aktualnosci = new WP_Query(
    //     array(
    //         'cat' => '2'
    //     )
    // );
    // while($aktualnosci->have_posts())
    // {
    //     $aktualnosci->the_post();
    ?> 

    <article>

        <ul>
            <li><a href="#">Ogloszenia</a></li>
        </ul>

        <a href="#">
            <h3>Zmiana obuwia</h3>
        </a>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel dolorem recusandae aspernatur ad! Quae
            laudantium ipsam, deserunt iusto id ipsum aliquam, ipsa iure eos repudiandae in eaque non magnam?
            Quisquam.</p>
    </article>
</section>

<section>
    <h2>Aktualnosci</h2>

    <article>
        <!-- nowy tag figure do obrazkow-->
        <figure>
            <img src="#" alt="Grajace w koszykowke uczennice">
        </figure>
        <span>Opublikowano: 23.12.2019</span>
        <ul>
            <li><a href="#">Sport</a></li>
        </ul>
        <a href="#">
            <h3>Streetblall Don Bosco 2019</h3>
        </a>
    </article>
</section>

<section>
    <h2>Rekrutacja 2019 - Liceum 4 letnie</h2>
    <span> Rekrutacja uczniow bylej szokly podstawowej </span>
    <nav>
        <h2>Klasy</h2>
        <ul>

            <li><a href="#">
                    <h3>Klasa humanistyczno-lingwistyczna</h3>
                </a></li>

            <li><a href="#">
                    <h3>Klasa matfizolowa</h3>
                </a></li>
        </ul>
    </nav>

    <nav>
        <h3>Linki</h3>
        <ul>
            <li><a href="#">
                    <h3>Oferta edukacyjna</h3>
                </a></li>
            <li><a href="#">
                    <h3>Proponowane klasy pierwsze</h3>
                </a></li>
        </ul>
    </nav>
</section>

<section>
    <h2>Wspolpracujemy</h2>
    <ul>
        <li><a href="#">Adobe</a></li>
        <li><a href="#">British Council</a></li>
        <li><a href="#">Aisec</a></li>
        <li><a href="#">Cisco</a></li>
        <li><a href="#">Jet Brains</a></li>
    </ul>
</section>

<section>
    <h2>Mapa dojazdu</h2>
    <!-- mapa dojazdu z google maps  -->
</section>

<section>
    <h2>Kontakt</h2>

</section>
<php? get_footer(); ?>
