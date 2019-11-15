<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<!--Boostar-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    /*---ON THE HOME PAGE ---*/

    /*artists*/
    var apiURL = 'https://nation-sounds.planethoster.world/wp-json/wp/v2/posts?categories=2'

    var festival = new Vue({
        el: '#festival',
        data: {
            festivalprogram: [],
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
                //console.log(this.festivalprogram)
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