<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Recruitment_Project
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="upper-part">
        <div class="bottom">
            <div class="text">
                <h2>Ubezpieczenie majątkowe</h2>
                <span>Skontaktuj się z nami i skorzystaj <br>ze specjalnej oferty!</span>
            </div>
        </div>
    </div>
    <div class="form">
        <div class="container">
            <h2>Podaj dane kontaktowe, a my przygotujemy najlepszą ofertę</h2>
            <div class="row">
                <div class="col">
                    <input type="text" id="name" name="name" placeholder="Imię i nazwisko">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="email" id="email" name="email" placeholder="Adres e-mail">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="tel" id="tel" name="tel" placeholder="Nr telefonu">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" id="city" name="city" placeholder="Miejscowość">
                </div>
                <div class="col">
                    <input type="text" id="postalcode" name="postalcode" placeholder="Kod pocztowy">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="checkbox" id="lorem" name="lorem">
                    <label for="lorem">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="button" class="send-button" value="Wyślij">
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-part">
        <div class="container">
            <div class="text">
                <div class="title">
                    <h2>Ubezpieczenia majątkowe</h2>
                    <h3>Co obejmują?</h3>
                </div>
                <div class="description">
                    <span>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                    </span>
                    <br><br>
                    <span>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                    </span>
                </div>
            </div>
            <button class="order-button">
                <span>Zamów ubezpieczenie</span>
            </button>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
