<!DOCTYPE html>
<html>

<?php include('layout/head.php')?>

<body>

    <div id="content">
    <?php include("layout/header.php");?>
        <div id="festival">
            <ul  v-if="festivalprogram.length > 0">
                <a href="">
                    <li v-for="artist in festivalprogram">
                        <img v-bind:src="artist.acf.photo.url"/>
                        <div class="name">{{artist.acf.scene}}</div>  
                    </li>
                </a>
            </ul>
        </div>
        <?php include('script/api.php') ?>
    </div>
</body>

</html>