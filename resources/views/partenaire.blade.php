    @extends('layouts\layout')

@section('contenu')
        <div class="banner">
            <div class="banner-bg-partenaire">
                <div class="container">
                    <div class="text-center">
                        <h1 class="text-white">Désireriez-Vous Une Valeur Ajoutée à Votre Business?</h1>
                        <p class="text-white">Réjoignez notre Programme Business Partenaire aujourd'hui ! </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="partenaire">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1 style="opacity: .8;">Pourquoi devenir notre Partenaire?</h1>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="card card-box">
                            <div class="icon-card-box">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <h3>One</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla iste et iusto eveniet, voluptatum maiores veritatis officia doloremque, neque eaque incidunt culpa quae quasi nihil nostrum vero aliquid aliquam quaerat?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-box">
                            <div class="icon-card-box">
                                <i class="fas fa-assistive-listening-systems"></i>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <h3>One</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla iste et iusto eveniet, voluptatum maiores veritatis officia doloremque, neque eaque incidunt culpa quae quasi nihil nostrum vero aliquid aliquam quaerat?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-box">
                            <div class="icon-card-box">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <h3>One</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla iste et iusto eveniet, voluptatum maiores veritatis officia doloremque, neque eaque incidunt culpa quae quasi nihil nostrum vero aliquid aliquam quaerat?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="become-partenaire">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <h1 class="mb-4">Désireriez-Vous devenir notre Partenaire Business?</h1>
                            <button class="btn btn-outline-primary btn-lg" data-toggle="modal" data-target="#exampleModal">Enregistrez-vous !</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="button-chat">
            <i class="fas fa-comment"></i>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Formulaire</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('db_P.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3 mb-5">
                        <div class="row ">
                            <div class="col-lg-12">
                                <label for="">Personnalité jurique</label>
                                <select class="custom-select form-control control-form" id="select" name="type" value="select">

                                    <option value="Société" id="societe">Société</option>
                                    <option value="Individue" id="individue">Individue</option>
                                  </select>
                            </div>
                        </div>
                    </div>
                      <div class="form-group mt-3 mb-4">
                          <div class="row ">
                              <div class="col-lg-6" id="name">
                                <input type="text" id="names" name="nom_ent"class="form-control control-form " placeholder="Nom de l'Entreprise">
                              </div>
                              <div class="col-lg-6" >
                                <input type="text" name="nom"class="form-control control-form " placeholder="Adresse physique">
                              </div>
                          </div>
                      </div>
                      <div class="form-group mt-3 mb-4">
                        <div class="row ">
                            <div class="col-lg-6">
                              <input type="email" name="email"class="form-control control-form " placeholder="Email">
                            </div>
                            <div class="col-lg-6">
                              <input type="text"name="phone" class="form-control control-form " placeholder="Téléphone">
                            </div><br><br>


                            <div class="col-lg-6">
                              <input type="text" name="pays"class="form-control control-form " placeholder="pays">
                            </div>
                            <div class="col-lg-6">
                              <input type="text"name="province" class="form-control control-form " placeholder="province">
                            </div>
                        </div>

                      </div>

                    <div class="form-group mt-3 mb-4">
                        <label for="" id="text">Inserer le document de votre Entreprise</label>
                        <div class="row ">

                            <div class="col-lg-6">
                                <div class="custom-file">
                                    <input type="file" name="img" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile" >joindre le fichie </label>
                                  </div>
                            </div>
                        </div>

                      </div>
                      <div class="form-group mt-3 mb-5">
                        <div class="row ">
                            <div class="col-lg-12">
                                <button class="btn btn-default btn-send btn-lg" >Enregistrer</button>
                            </div>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="{{ asset('js/animation.js') }}"></script>

</body>
</html>
