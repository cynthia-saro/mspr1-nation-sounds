<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nation Sounds</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <!--Boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!----MAIN---->
    <div id="content">
        <!----HEADER----->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand logo" href="http://localhost/mspr1-nation-sounds/"><img src="http://nation-sounds.planethoster.world/wp-content/uploads/2019/11/logo-e1573759787249.png"></a>

            <button class="navbar-toggler infoPicture" type="button" data-toggle="collapse" data-target="#actuInfo" aria-controls="actuInfo" aria-expanded="false" aria-label="Toggle navigation">
                <img src="http://nation-sounds.planethoster.world/wp-content/uploads/2019/11/information.png">
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/mspr1-nation-sounds/programme.php">Programme</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Artistes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Carte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Billeterie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://nation-sounds.planethoster.world/faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="file:///C:/wamp64/www/mspr1-nation-sounds/partenaire.html">Partenaires</a>
                    </li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="actuInfo">
                <ul class="navbar-nav mr-auto" v-if="actuInfo.length > 0">
                    <li class="nav-item active">
                        <div class="actuToggleTitle">Les actus</div>
                    </li>
                    <div class="socialNetworks">
                        <a href="https://www.instagram.com/?hl=fr"><img src="http://nation-sounds.planethoster.world/wp-content/uploads/2019/11/instagram-1.png"></a>
                        <a href="https://twitter.com/login"><img src="http://nation-sounds.planethoster.world/wp-content/uploads/2019/11/twitter-1.png"></a>
                        <a href="https://www.facebook.com/"><img src="http://nation-sounds.planethoster.world/wp-content/uploads/2019/11/facebook.png"></a>
                    </div>
                    <li class="nav-item" v-for="actu in actuInfo">
                        <div class="actuTitle">{{actu.acf.titre}}</div>
                    </li>
                </ul>
            </div>
        </nav>

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

            <!--Programmation-->
            <ul v-if="festivalprogram.length > 0">
                <li v-for="artist in festivalprogram" class="homeArtists">
                    <a v-on:click="show" >
                        <img v-bind:src="artist.acf.photo.url" class="pictureArtists"/>
                        <div class="nameArtists">{{artist.acf.nom}}</div> 
                            <div class="description" v-if="isDisplay">
                                <p>{{artist.acf.description}}</p>
                                <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Billets</button></a>
                                <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Partagez</button></a>
                                <br>
                                <a class="cacher" v-on:click="hide">Fermer</a>
                            </div>  -->
                </a>
            </li>
            <div v-if="isDisplay">
                <p>{{festivalprogram.acf.description}}</p>
                <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Billets</button></a>
                <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Partagez</button></a>
                <br>
                <a class="cacher" v-on:click="hide">Fermer</a>
            </div>
        </ul>
                            </div> 
                    </a>    
                </li>
                <!-- <div v-if="isDisplay">
                                <p>{{festivalprogram.acf.description}}</p>
                                <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Billets</button></a>
                                <a href="https://www.digitick.com/festival-tickets"><button type="button" class="btn btn-warning">Partagez</button></a>
                                <br>
                                <a class="cacher" v-on:click="hide">Fermer</a>
                </div>  -->
            </ul>
            
        </div>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!--Boostar-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        var apiURL = 'https://nation-sounds.planethoster.world/wp-json/wp/v2/posts?categories=2'

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
                            self.festivalprogram = response.data
                        })
                        .catch(function(error) {
                            console.log(error);
                        })
                    console.log(this.isDisplay)
                },
                show: function() {
                    this.isDisplay = true;
                },
                hide: function() {
                    this.isDisplay = false;
                }
            }
        })
        /*security infomations*/
        var apiURLsecurityInforamation = 'https://nation-sounds.planethoster.world/wp-json/wp/v2/posts?categories=3'

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
                            self.securityInfo = response.data
                        })
                        .catch(function(error) {
                            console.log(error);
                        })
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
    </div>
</body>

</html>