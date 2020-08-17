<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="nav">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="images/Logo-White.png" alt="" width="250">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item  mr-5" id="home">
                    <a class="nav-link link active " href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-5" id=" achat">
                    <a class="nav-link link" href="#">Achat <i class="fas fa-angle-down"></i></a>
                </li>
                <li class="nav-item mr-5" id="companie">
                    <a class="nav-link link"id="companie"  href="#">Companie <i class="fas fa-angle-down"></i></a>
                    <div class="drop-list">
                        <ul>
                            <li><a href="">A propos de Nous</a></li>
                            <li><a href="{{ route('partenaire') }}">Partenaire</a></li>
                            <li><a href="">Guides</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mr-5" >
                    <a class="nav-link  link " id="contact" href="{{ route('contact') }}">Contacts</a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item  mr-5">
                    <?php
                    $nbr = 0;
                    ?>
                    @if(session('cart'))

                    <?php
                    $nbr = count(session('cart'));
                    ?>

                    @endif
                    <a class="nav-link link-shopping" href="{{ route('panier') }}"><span><i class="fas fa-shopping-cart fa-2x"></i><sup><i class="badge badge-danger"><?= $nbr ?></i></sup></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-sign-in" href="#"><span><i class="fas fa-user fa-2x"></i> Connexion</span></a>
                </li>


            </ul>
        </div>
    </div>
</nav>
<script src="{{ asset('js/link.js') }}"></script>
