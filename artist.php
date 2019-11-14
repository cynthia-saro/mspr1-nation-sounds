<html>
<?php include('layout/head.php')?>

<body>
    <?php include('layout/header.php') ?>
    <div id="content">
        <div id="festival">
            <ul>
                    <li>
                        <!-- <img v-bind:src="artist.acf.photo.url"/> -->
                        <div class="name">nom artiste</div>  
                        <div class="name">description artiste</div> 
                       <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Billeterie</button></a>
                    </li>
                </a>
            </ul>
        </div>
        <?php include('script/api.php') ?>
    </div>

</body>

</html>