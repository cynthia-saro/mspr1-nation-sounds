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

    <div id="content">
    <?php include("layout/navbar");?>
        <div id="festival">
            <ul>
                <a href="">
                    <li v-for="artist in festivalprogram">
                        <img v-bind:src="artist.acf.photo"/>
                        <div class="name">{{artist.acf.scene}}</div>  
                    </li>
                </a>
            </ul>
        </div>

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

        <!--Boostar-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>

            var apiURL = 'https://nation-sounds.000webhostapp.com/wp-json/wp/v2/posts?categories=2'

            var festival = new Vue({
                el: '#festival',
                data: {
                    festivalprogram: null,
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
                        //console.log(this.festivalprogram)
                    }
                }
            })
        </script>
    </div>
</body>

</html>