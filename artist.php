<html>
<?php include('layout/head.php')?>

<body>
    <?php include('layout/header.php') ?>
    <div id="content">
        <div id="festival">
           
            <!-- <img v-bind:src="artist.acf.photo.url"/> -->
            <h1>nom artiste</h1>  
            <div class="name">description artiste</div> 
              <div class="buttons">  
                <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Billets</button></a>
                <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Partagez</button></a>
              </div>             
        </div>
        <?php include('script/api.php') ?>
    </div>

</body>

</html>