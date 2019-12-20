<!DOCTYPE html>
<html>

<?php include ("./layout/head.php") ?>

<body>

    <div id="content" v-cloak>
        <!----HEADER NAV BAR----->
      <?php include ("./layout/navbar.php") ?>

        <!--Carrousel Security infomation-->
        <div id="security">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" v-if="securityInfo.length > 0">
                    <div class="carousel-item active">
                        <p>>> LES INFOS IMPORTANTES >></p>
                    </div>
                    <div class="carousel-item" v-for="post in securityInfo" class="homeSecurity">
                        <div class="titleSecurity">{{post.title}}</div>
                        <a href="securityinfos.php">En savoir plus ...</a>
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
                    <a v-on:click="show">
                        <img v-bind:src="artist.picture" class="pictureArtists" />
                        <div class="nameArtists">{{artist.name}}</div>
                        <div v-if="isDisplay" class="description"> 
                            <p>{{artist.description}}</p>
                            <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Billets</button></a>
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

        <!--Boostar-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            /*---ON THE HOME PAGE ---*/

            /*artists*/
            var apiURL = 'http://localhost:8000/json/artists'

            var festival = new Vue({
                el: '#festival',
                data: {
                    festivalprogram: [],
                    isDisplay: false,
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
                                self.festivalprogram = response.data.artists
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

            /*security infomations*/
            var apiURLsecurityInforamation = 'http://localhost:8000/json/securityinfos'

            var securityInfo = new Vue({
                el: '#security',
                data: {
                    securityInfo: [],
                },

                created: function() {
                    this.fetchData()
                },

                // fonction permettant de nous lier à l'API (récupérer les données via l'API)
                methods: {
                    fetchData: function() {
                        var self = this
                        axios.get(apiURLsecurityInforamation)
                            .then(function(response) {
                                console.log(response.data)
                                self.securityInfo = response.data.securityinfos
                            })
                            .catch(function(error) {
                                console.log(error);
                            })
                    }
                }
            })


            /*actu infomations*/
            var apiURLactuInformation = 'http://localhost:8000/json/actualities'

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
                                self.actuInfo = response.data.actualities
                            })
                            .catch(function(error) {
                                console.log(error);
                            })
                    }
                }  
            })
        </script>
        <script>
        $("#faq").on("click", ".questions", function() {
        $(this).next(".reponses").slideToggle();
        });
        </script>
        <!----SCRIPTS----->
    </div>
</body>

</html>