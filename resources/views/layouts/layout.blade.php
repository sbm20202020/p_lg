<!-- Session::flush() Pour detruire toutes les sessions-->
<!-- Session::forget('cart') Pour detruire toutes les sessions-->

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lg Telecoms</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="font/css/all.min.css">
</head>

<body>

    <div class="section">
        <!-- Barre de navigation -->
        @include('layouts._nav')

        <!-- Contenu a afficher -->
        @yield('contenu')

        <!-- footer -->
        @include('layouts._footer')
        <div class="button-chat">
            <i class="fas fa-comment"></i>
        </div>
    </div>

    <script src="js/app.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('.image-box').click(function(){
            $(this).toggleClass('show');
            $('.navbar').toggleClass('nav-transparent');
        })
        $('.content-text').click(function(){
            $('.image-box').removeClass('show');
        })
    </script>
</body>

</html>
