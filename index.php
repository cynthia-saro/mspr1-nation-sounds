<!DOCTYPE html>
<html>

<?php include('layout/head.php')?>

<body>

    <div id="content">
     <?php include("layout/header.php");?>
        <div id="festival">
            <ul v-if="festivalprogram.length > 0">
                <li v-for="artist in festivalprogram" class="homeArtists">
                    <a v-on:click="show" >
                        <img v-bind:src="artist.acf.photo.url" class="pictureArtists"/>
                        <h2 class="nameArtists">{{artist.acf.nom}}</h2> 
                            <!-- <div v-if="isDisplay">
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

                created: function () {
                    this.fetchData()
                },

                // fonction permettant de nous lier à l'API (récupérer les données via l'API)
                methods: {
                    fetchData: function () {
                        var self = this
                        axios.get(apiURL)
                            .then(function (response) {
                                console.log(response.data)
                                self.festivalprogram = response.data
                            })
                            .catch(function (error) {
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
        </script>
    </div>
</body>

</html>