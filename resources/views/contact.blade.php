

        @extends('layouts\layout')

@section('contenu')
        <div class="banner">
            <div class="banner-bg-contact">
                <div class="container">
                    <div class="text-center">
                        <h1 class="text-white">Contactez-Nous</h1>
                        <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia quidem quo natus molestiae, dolor culpa. Maxime corporis assumenda voluptas nisi animi vel eaque minus, magnam, delectus aspernatur, rem repudiandae eveniet.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts">
            <div class="container">
                <div class="jumbotron detail-contact" style="box-shadow: 0px 28px 65px 0px rgba(188, 188, 188, 0.25) !important;background: #FFF;">
                    <div class="icon-envelope">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="text-left">
                                    <h4>Envoyez-Nous Votre Message</h4>
                                </div>
                                <form action="{{ route('db.store') }}" method="POST" >
                                    @csrf
                                    <div class="form-group mt-5 mb-5">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" name="nom"class="form-control control-form " placeholder="Votre Nom" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" name="prenom"class="form-control control-form " placeholder="Votre Prenom" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-5">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="email" id="email"name="email" class="form-control control-form " placeholder="Votre Adress Email" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="numer" name="numero"class="form-control control-form " placeholder="Votre numéro de téléphone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-5">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <textarea type="text" id="message"name="message"class="form-control control-form " placeholder="Votre Message"></textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6" id="send">
                                               <button class="btn btn-default btn-send btn-lg" >Envoyer</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="contact-info">
                        <div class="text-left">
                            <h4 class="text-white">Info Contact</h4>
                            <p><i class="fas fa-map-marker"></i> looepennjl</p>
                            <p><i class="fas fa-map-marker"></i> looepennjl</p>
                            <p><i class="fas fa-map-marker"></i> looepennjl</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    <script src="{{ asset('js/verification.js') }}"></script>
</body>
</html>
