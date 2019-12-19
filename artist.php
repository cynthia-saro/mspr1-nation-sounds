<?php include ("./layout/head.php") ?>
<?php include ("./layout/navbar.php")?>

<div id="festival">

            <!--Programmation-->
            <ul v-if="festivalprogram.length > 0">
                <li v-for="artist in festivalprogram" class="homeArtists">
                    <a v-on:click="show">
                        <img v-bind:src="artist.acf.photo.url" class="pictureArtists" />
                        <div class="nameArtists">{{artist.acf.nom}}</div>
                        <div v-if="isDisplay" class="description"> 
                            <p>{{artist.acf.description}}</p>
                            <p class="detail">Scène: {{artist.acf.scene}}</p>
                            <p class="detail">Date: {{artist.acf.jour}}</p>
                            <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Billets</button></a>
                            <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Partagez</button></a>
                            <br>
                            <a href="./programme.php" class="retour">retour</a>
                        </div>
                    </a>
                </li>
            </ul>
            
        </div>