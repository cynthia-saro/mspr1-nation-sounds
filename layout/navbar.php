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
                        <a class="nav-link" href="programme.php">Programme</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="geoloc.php">Carte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.digitick.com/festival-tickets">Billeterie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://nation-sounds.planethoster.world/faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="partenaire.php">Partenaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rencontres.php">Rencontres</a>
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
                        <div class="actuTitle">{{actu.title}}</div>
                    </li>
                </ul>
            </div>
        </nav>