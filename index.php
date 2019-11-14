<!DOCTYPE html>
<html>

<?php include('layout/head.php') ?>

<body>

    <div id="content">
        <?php include("layout/header.php"); ?>

        <!--Carrousel Security infomation-->
        <div id="security">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" v-if="securityInfo.length > 0">
                    <div class="carousel-item active">
                        <p>>> LES INFOS IMPORTANTES >></p>
                    </div>
                    <div class="carousel-item" v-for="post in securityInfo" class="homeSecurity">
                        <div class="titleSecurity">{{post.acf.titre}}</div>
                        <a v-bind:href="post.link">En savoir plus ...</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!--Festival programmation-->
        <div id="festival">

            <!--Programmation-->
            <ul v-if="festivalprogram.length > 0">
                <li v-for="artist in festivalprogram" class="homeArtists">
                    <a v-bind:href="artist.link">
                        <img v-bind:src="artist.acf.photo.url" class="pictureArtists" />
                        <div class="nameArtists">{{artist.acf.nom}}</div>
                    </a>
                </li>
            </ul>
            
        </div>
        <?php include('script/api.php') ?>
    </div>
</body>

</html>