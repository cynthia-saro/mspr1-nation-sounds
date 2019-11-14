<!DOCTYPE html>
<html>

<?php include('layout/head.php')?>

<body>

    <div id="content">
     <?php include("layout/header.php");?>
        <div id="festival">
            <ul v-if="festivalprogram.length > 0">
                <li v-for="artist in festivalprogram" class="homeArtists">
                    <a v-bind:href="artist.link" >
                        <img v-bind:src="artist.acf.photo.url" class="pictureArtists"/>
                        <div class="nameArtists">{{artist.acf.nom}}</div>  
                    </a>    
                </li>
            </ul>
        </div>
        <?php include('script/api.php') ?>
    </div>
</body>

</html>