@extends('layouts\layout')

@section('contenu')
<div class="gallery">
    @foreach($produits as $p)
    <div class="image-box">
        <img src="images/{{$p->nom_image}}" alt="">
        <div class="container-fluid">
            <div class="row hidden">
                <div class="col-lg-7">
                    <div class="container">

                        <div class="text-center mb-5">
                            <h1 class="mt-4 mb-4 title-product"><i class="fas fa-cog"></i> {{$p->nom}}</h1>
                            <p class="text-white paragraph">
                                {{$p->description}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <br>
                        @if($p->promotion)
                        <div class="col-lg-12 no-padding">
                            <div class="card" style="border: none!important;border-radius: 0px!important;">
                                {{ $p->promotion }}
                            </div>
                        </div>
                        @endif
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="row">
                        @foreach($p->items as $i)

                        <div class="col-lg-6 no-padding">
                            <a href="Hello.html">
                                <div class="card box bg-black-box">
                                    <div class="text-center">
                                        <h2></h2>
                                        <span>
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <p>Nom : [{{$i->nom}}]</p>
                                        <!-- <p class="btn-holder"><a href="{{ url('add-to-cart/'.$i->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="col-lg-6 no-padding">
                            <div class="card box bg-black-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-black-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-black-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div> -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @if($p->nom=='IP TV')
        <div class="content-text bg-red">
            @elseif($p->nom=='VOIP')
            <div class="content-text bg-black">
                @elseif($p->nom=='CONNECTIVITE')
                <div class="content-text bg-red">

                    @elseif($p->nom=='HEBERGEMENT')
                    <div class="content-text bg-black">

                        @elseif($p->nom=='LTE')
                        <div class="content-text bg-red">
                            @else
                            <div class="content-text bg-black">
                                @endif
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                @if($p->nom=='IP TV')
                                <div class="text-center">
                                    <i class="fas fa-desktop fa-2x"></i>
                                    <h5 class="text-white">{{$p->nom}}</h5>
                                </div>
                                @elseif($p->nom=='VOIP')
                                <div class="text-center">
                                    <i class="fas fa-phone-volume fa-2x"></i>
                                    <h5 class="text-white">{{$p->nom}}</h5>
                                </div>
                                @elseif($p->nom=='CONNECTIVITE')
                                <div class="text-center">
                                    <i class="fas fa-ethernet fa-2x"></i>
                                    <h5 class="text-white">ETHERNET</h5>
                                </div>
                                @elseif($p->nom=='HEBERGEMENT')
                                <div class="text-center">
                                    <i class="fas fa-server fa-2x"></i>
                                    <h5 class="text-white">{{$p->nom}}</h5>
                                </div>
                                @elseif($p->nom=='LTE')
                                <div class="text-center">
                                    <i class="fas fa-sim-card fa-2x"></i>
                                    <h5 class="text-white">{{$p->nom}}</h5>
                                </div>
                                @else
                                <div class="text-center">
                                    <i class="fas fa-desktop fa-2x"></i>
                                    <h5 class="text-white">{{$p->nom}}</h5>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                        <!--<div class="image-box">
        <img src="images/2.jpg" alt="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="container">

                        <div class="text-center mb-5">
                            <h1 class="mt-4 mb-4 title-product"><i class="fas fa-cog"></i> INTERNET</h1>
                            <p class="text-white paragraph">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa eum nihil impedit non. Necessitatibus porro deserunt nisi adipisci sit voluptas et vero accusamus exercitationem ab minima numquam, tempore totam illo?
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12 no-padding">
                            <div class="card" style="border: none!important;border-radius: 0px!important;">ooo</div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-blue-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-blue-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-blue-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-blue-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-text bg-blue">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="text-center">
                <i class="fas fa-phone-volume fa-2x"></i>
                <h5 class="text-white">VOIP</h5>
            </div>
        </div>
    </div>
    <div class="image-box">
        <img src="images/3.jpg" alt="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="container">

                        <div class="text-center mb-5">
                            <h1 class="mt-4 mb-4 title-product"><i class="fas fa-cog"></i> INTERNET</h1>
                            <p class="text-white paragraph">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa eum nihil impedit non. Necessitatibus porro deserunt nisi adipisci sit voluptas et vero accusamus exercitationem ab minima numquam, tempore totam illo?
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12 no-padding">
                            <div class="card" style="border: none!important;border-radius: 0px!important;">ooo</div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-green-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-green-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-green-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-green-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-text bg-green">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="text-center">
                <i class="fas fa-ethernet fa-2x"></i>
                <h5 class="text-white">FIBRE</h5>
            </div>
        </div>
    </div>
    <div class="image-box">
        <img src="images/4.jpg" alt="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="container">

                        <div class="text-center mb-5">
                            <h1 class="mt-4 mb-4 title-product"><i class="fas fa-cog"></i> INTERNET</h1>
                            <p class="text-white paragraph">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa eum nihil impedit non. Necessitatibus porro deserunt nisi adipisci sit voluptas et vero accusamus exercitationem ab minima numquam, tempore totam illo?
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12 no-padding">
                            <div class="card" style="border: none!important;border-radius: 0px!important;">ooo</div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-yellow-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-yellow-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-yellow-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-yellow-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-text bg-yellow">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="text-center">
                <i class="fas fa-server fa-2x"></i>
                <h5 class="text-white">HEBERGEMENT</h5>
            </div>
        </div>
    </div>
    <div class="image-box">
        <img src="images/5.jpg" alt="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="container">

                        <div class="text-center mb-5">
                            <h1 class="mt-4 mb-4 title-product"><i class="fas fa-cog"></i> INTERNET</h1>
                            <p class="text-white paragraph">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa eum nihil impedit non. Necessitatibus porro deserunt nisi adipisci sit voluptas et vero accusamus exercitationem ab minima numquam, tempore totam illo?
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="text-center text-white">
                                <i class="fas fa-user fa-2x"></i>
                                <p>Lorem ipsum dolor si</p>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12 no-padding">
                            <div class="card" style="border: none!important;border-radius: 0px!important;">ooo</div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-blue-light-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-blue-light-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-blue-light-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-padding">
                            <div class="card box bg-blue-light-box">
                                <div class="text-center">
                                    <h2>One</h2>
                                    <span>

                                        <i class="fas fa-check"></i>
                                    </span>

                                    <p>nenennenennenene</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-text bg-blue-light">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="text-center">
                <i class="fas fa-sim-card fa-2x "></i>
                <h5 class="text-white">LTE</h5>
            </div>
        </div>
    </div>-->

    <div class="image-box">
        <img src="images/shop.jpg" alt="">
            <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="container">

                        <div class="text-center mb-5">
                            <h1 class="mt-4 mb-4 title-product"><i class="fas fa-shopping-bag"></i> SHOP</h1>
                                <p class="text-white paragraph">
                                    Passer vos commandes en toute sécurité !
                                </p>
                        </div>
                    </div>

                                    </div>
                                    <div class="col-lg-5">
                                        <div class="row">
                                        @foreach($produits as $p)
                                            <div class="col-lg-6 no-padding">
                                                <div class="card box bg-red-box">
                                                    <div class="text-center">
                                                        <h2> {{$p->nom}} </h2>
                                                        <span>
                                                            @if($p->nom=='IP TV')
                                                            <i class="fas fa-desktop"></i>
                                                            @elseif($p->nom=='VOIP')
                                                            <i class="fas fa-phone-volume"></i>
                                                            @elseif($p->nom=='CONNECTIVITE')
                                                            <i class="fas fa-ethernet"></i>
                                                            @elseif($p->nom=='HEBERGEMENT')
                                                            <i class="fas fa-server"></i>
                                                            @elseif($p->nom=='LTE')
                                                            <i class="fas fa-sim-card"></i>
                                                            @else
                                                            <i class="fas fa-check"></i>
                                                            @endif

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-text bg-green">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <div class="text-center">
                                    <i class="fas fa-shopping-bag fa-2x"></i>
                                    <h5 class="text-white">SHOP</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @stop

                    @section('contenuOLD')
                    <div class="gallery">
                        @foreach($produits as $p)

                        <div class="image-box">
                            <img src="images/{{ $p->nom_image }}" alt="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="text-center mb-5">
                                            <p class="text-white paragraph">
                                                {{-- Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa eum nihil impedit non. Necessitatibus porro deserunt nisi adipisci sit voluptas et vero accusamus exercitationem ab minima numquam, tempore totam illo?  --}}
                                                {{$p->description}}
                                            </p>
                                        </div>
                                        <div class="row">
                                            @foreach($p->items as $i)


                                            <div class="col-lg-4">
                                                <div class="text-center text-white">
                                                    <i class="fas fa-user fa-2x"></i>
                                                    <p>Nom : [{{$i->nom}}]</p>
                                                    <p>Prix : {{$i->prix}}</p>

                                                    <p class="btn-holder"><a href="{{ url('add-to-cart/'.$i->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                                                </div>
                                            </div>
                                            @endforeach
                                            {{-- <div class="col-lg-4">
                                    <div class="text-center text-white">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="text-center text-white">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>  --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    ddidid
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-text bg-black">

                                <div class="text-center">
                                    <i class="fas fa-cog fa-4x"></i>
                                    <h1 class="title-service">{{$p->nom}}</h1>
                                </div>

                            </div>

                        </div>

                        @endforeach

                        {{-- <div class="image-box">
                <img src="images/femme3-1.jpg" alt="">
                <div class="content-text bg-blue">
                    <div class="text-center">
                        <i class="fas fa-home fa-4x"></i>
                        <h1 class="title-service">INTERNET</h1>
                    </div>
                </div>
            </div>
            <div class="image-box">
                <img src="images/masque6.jpg" alt="">
                <div class="content-text bg-green">
                    <div class="text-center">
                        <i class="fas fa-cogs fa-4x"></i>
                        <h1 class="title-service">INTERNET</h1>
                    </div>
                </div>
            </div>
            <div class="image-box">
                <img src="images/4.jpg" alt="">
                <div class="content-text bg-yellow">
                    <div class="text-center">
                        <i class="fas fa-male fa-4x"></i>
                        <h1 class="title-service">INTERNET</h1>
                    </div>
                </div>
            </div>
            <div class="image-box">
                <img src="images/5.jpg" alt="">
                <div class="content-text bg-blue-light">
                    <div class="text-center">
                        <i class="fas fa-envelope fa-4x"></i>
                        <h1 class="title-service">INTERNET</h1>
                    </div>
                </div>
            </div>
            <div class="image-box">
                <img src="images/6.jpg" alt="">
                <div class="content-text bg-red">
                    <div class="text-center">
                        <i class="fas fa- fa-4x"></i>
                        <h1 class="title-service">SHOP</h1>
                    </div>
                </div>
            </div>  --}}
                        <div class="image-box">
                            <img src="images/6.jpg" alt="">
                            <div class="content-text bg-red">
                                <div class="text-center">
                                    <i class="fas fa- fa-4x"></i>
                                    <h1 class="title-service">SHOP</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endsection
