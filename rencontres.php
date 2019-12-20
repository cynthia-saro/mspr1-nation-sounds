<!DOCTYPE html>
<html>

<?php include("./layout/head.php") ?>

<body>

    <div id="content" v-cloak>
        <!----HEADER NAV BAR----->
        <?php include("./layout/navbar.php") ?>

        <!--Festival programmation-->
        <div id="meetings">
            
            <h1>Rencontres avec les artistes</h1>
            <!---DAYS FILTER---->

            <ul >
                <li v-for="meet in meetings" class="homeArtists">
                        <p>Début de la recontre: {{meet.beginning.date}}</p>
                        <p>Fin de la rencontre: {{meet.ending.date}}</p>
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

            /*actu infomations*/
            var apiURLmeetartist = 'http://localhost:8000/json/meetings'

            var meetings = new Vue({
                el: '#meetings',
                data: {
                    meetings: [],
                },

                created: function() {
                    this.fetchData()
                },

                // fonction permettant de nous lier à l'API (récupérer les données via l'API)
                methods: {
                    fetchData: function() {
                        var self = this
                        axios.get(apiURLmeetartist)
                            .then(function(response) {
                                console.log(response.data)
                                self.meetings = response.data.meetings
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