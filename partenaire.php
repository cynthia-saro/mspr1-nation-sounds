<!DOCTYPE html>
<html>

<?php include ("/layout/head.php") ?>

<body>

    <div id="content" v-cloak>

        <!----HEADER NAV BAR----->
        <?php include ("/layout/navbar.php") ?>

        <!--Festival programmation-->
        <h1 id="titrepartenaire">Nos Partenaires</h1>
        <div id="blockpartenaire">

            <a href="https://www.marriott.fr/loyalty.mi"><img class="picturePartenaire" src="photos/50956330_2063232000633761_8682195140967661568_n.png"></a>
            <a href="https://www.americanexpress.com/fr/"><img class="picturePartenaire" src="photos/64215803_2356352754612127_6254613950923538432_n.png"></a>
            <a href="https://www.absolut.com/fr/news/"><img class="picturePartenaire" src="photos/75398103_584311062313870_7731937934579859456_n.png"></a>
            <a href="https://www.amazon.fr/"><img class="picturePartenaire" src="photos/75424752_677521502773605_8000234684611035136_n.jpg"></a>
            <a href="https://www.bose.fr/fr_fr/index.html"><img class="picturePartenaire" src="photos/75462440_1202354193295464_8024881092446126080_n.png"></a>
            <a href="https://www.cupcakevineyards.com/"><img class="picturePartenaire" src="photos/76189343_2569548766472330_1990505599808307200_n.png"></a>
            <a href="https://www.heinekenfrance.fr/gate-age/"><img class="picturePartenaire" src="photos/76775076_2701328636579791_5607082794225238016_n.png"></a>
            
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