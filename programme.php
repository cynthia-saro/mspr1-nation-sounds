<!DOCTYPE html>
<html>

<?php include ("./layout/head.php") ?>

<body>

    <div id="content" v-cloak>
        <!----HEADER NAV BAR----->
        <?php include ("./layout/navbar.php")?>
   
        <!--Festival programmation-->
        <div id="festival">

            <!---DAYS FILTER---->
            <div class="bar">
                <a class="dayselect" v-bind:class="{ 'active': layout == 'alldays'}" v-on:click="layout = 'alldays'">Tous</a>
                <a class="dayselect" v-bind:class="{ 'active': layout == 'friday'}" v-on:click="layout = 'friday'">Vendredi</a>
                <a class="dayselect" v-bind:class="{ 'active': layout == 'saturday'}" v-on:click="layout = 'saturday'">Samedi</a>
                <a class="dayselect" v-bind:class="{ 'active': layout == 'sunday'}" v-on:click="layout = 'sunday'">Dimanche</a>
            </div>
        
            <ul v-if="layout == 'alldays' && festivalprogram.length > 0" class="alldays">
                <li v-for="artist in festivalprogram" class="homeArtists">
                    <a href="./artist.php">
                        <img v-bind:src="artist.acf.photo.url" class="pictureArtists" />
                        <div class="nameArtists">{{artist.acf.nom}}</div>
                    </a>
                </li>
            </ul>

            <ul v-if="layout == 'friday'" class="friday">
                <li v-for="artist in festivalprogram" class="homeArtists" v-if="artist.acf.jour == 'vendredi'">
                    <a v-on:click="show">
                        <img v-bind:src="artist.acf.photo.url" class="pictureArtists" />
                        <div class="nameArtists">{{artist.acf.nom}}</div>
                        <div v-if="isDisplay" class="description"> 
                            <p>{{artist.acf.description}}</p>
                            <p>{{artist.acf.date}}</p>
                            <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Billets</button></a>
                            <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Partagez</button></a>
                            <br>
                            <a class="cacher" v-on:click="hide">Fermer</a>
                        </div>
                    </a> 
                </li>
            </ul>  

            <ul v-if="layout == 'saturday'" class="saturday">
                <li v-for="artist in festivalprogram" class="homeArtists" v-if="artist.acf.jour=='samedi'">
                    <a v-on:click="show">
                        <img v-bind:src="artist.acf.photo.url" class="pictureArtists" />
                        <div class="nameArtists">{{artist.acf.nom}}</div>
                        <div v-if="isDisplay" class="description"> 
                            <p>{{artist.acf.description}}</p>
                            <p>{{artist.acf.date}}</p>
                            <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Billets</button></a>
                            <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Partagez</button></a>
                            <br>
                            <a class="cacher" v-on:click="hide">Fermer</a>
                        </div>
                    </a>
                </li>
            </ul>
        
            <ul v-if="layout == 'sunday'" class="sunday">
                <li v-for="artist in festivalprogram" class="homeArtists" v-if="artist.acf.jour=='dimanche'">
                    <a v-on:click="show">
                        <img v-bind:src="artist.acf.photo.url" class="pictureArtists" />
                        <div class="nameArtists">{{artist.acf.nom}}</div>
                        <div v-if="isDisplay" class="description"> 
                            <p>{{artist.acf.description}}</p>
                            <p>{{artist.acf.date}}</p>
                            <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Billets</button></a>
                            <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Partagez</button></a>
                            <br>
                            <a class="cacher" v-on:click="hide">Fermer</a>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
        
        <!----SCRIPTS----->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

        <!--Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            /*---ON THE HOME PAGE ---*/

            /*artists*/
            var apiURL = 'https://nation-sounds.planethoster.world/wp-json/wp/v2/posts?per_page=100&categories=2'

            var festival = new Vue({
                el: '#festival',
                data: {
                    festivalprogram: [],
                    isDisplay: false,
                    layout: 'alldays',
                },

                created: function() {
                    this.fetchData()
                },

                // fonction permettant de nous lier à l'API (récupérer les données via l'API)
                methods: {
                    fetchData: function() {
                        var self = this
                        axios.get(apiURL)
                            .then(function(response) {
                                console.log(response.data)
                                self.festivalprogram = response.data
                            })
                            .catch(function(error) {
                                console.log(error);
                            })
                    },
                    show: function(){
                        this.isDisplay = true;
                    },
                    hide: function(){
                        this.isDisplay = false;
                    }
                }
            })


            /*actu infomations*/
            var apiURLactuInformation = 'https://nation-sounds.planethoster.world/wp-json/wp/v2/posts?categories=4'

            var actuInfo = new Vue({
                el: '#actuInfo',
                data: {
                    actuInfo: [],
                },

                created: function() {
                    this.fetchData()
                },

                // fonction permettant de nous lier à l'API (récupérer les données via l'API)
                methods: {
                    fetchData: function() {
                        var self = this
                        axios.get(apiURLactuInformation)
                            .then(function(response) {
                                console.log(response.data)
                                self.actuInfo = response.data
                            })
                            .catch(function(error) {
                                console.log(error);
                            })
                    }
                }

                
            })
        </script>
        <!----SCRIPTS----->
    </div>
</body>

</html>