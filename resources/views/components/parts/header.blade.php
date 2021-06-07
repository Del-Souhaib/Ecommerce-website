<style>
    .navbar {
        font-size: 16px;
    }

    .navbar .navbar-nav .nav-item a {
        color: white !important;
    }

    .navbar .navbar-nav .nav-item {
        margin-right: 15px;
        padding-left: 10px;
        padding-right: 10px;
    }

    .navbar .navbar-nav .nav-item:first-child {
        margin-left: 0;
    }

    header .part2, header .part1 {
        color: #6c6767;
    }

    header .part2 a, header .part1 a {
        text-decoration: none;
        color: #6c6767;
    }

    header .part1 .side1 ul li {
        border-right: solid 1px #bbb6b6;
        padding-right: 15px;
        padding-left: 15px;
    }

    header .part1 {
        font-size: 12px;
        -webkit-box-shadow: 0px 8px 8px 0px rgba(0, 0, 0, 0.58);
        box-shadow: 0px 8px 8px 0px rgba(0, 0, 0, 0.58) !important;
    }

    header .part1 li:hover a {
        color: #f69c14;
    }

</style>
<div class="container-fluid part1 mt-1 pt-2 pb-2" style="background-color: #ffffff;">
    <div class="row align-items-center">
        <div class="col-6 side1">
            <ul class="d-flex pb-0 mb-0" style="list-style: none">
                <li>
                    <a href="">Accueil</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
                <li>
                    <a href="">Plan du site</a>
                </li>
            </ul>
        </div>
        <div class="col-6 text-end">
            <ul class="d-flex justify-content-end align-items-center pb-0 mb-0" style="list-style: none">
                <li class="d-flex align-items-center ps-3 pe-3" style="cursor: pointer;border-left: solid 1px #6c6767">
                    <img src="{{asset('media/icons/fixphone.svg')}}" class="me-2" style="height: 18px">
                    <span class="me-1">Magasin</span>
                    <span style="font-weight: 600;color: #f69c14">0554 7823 669</span>

                </li>
                <li class="d-flex align-items-center" style="cursor: pointer">
                    <img src="{{asset('media/icons/telephone.svg')}}" class="" style="height: 18px">
                    <span class="me-1">Services Client</span>
                    <span style="font-weight: 600;color: #f69c14">0554 7823 669</span>
                </li>
            </ul>

        </div>
    </div>
</div>
<div class="container-fluid part2" style="background-color: #f6f6f6 !important;">
    <div class="row d-flex align-items-center">
        <div class="col-3">
            <img src="{{asset('media/icons/logo.jpg')}}" style="height: 120px">
        </div>
        <div class="col-3 d-flex ">
            <input type="text" class="form-control"
                   style="border-radius: 0 !important;background-color: #f3f1f1;font-size: 13px!important;"
                   placeholder="Rechercher un produit...">
            <button class="btn" style="background-color: #f69c14;border-radius: 0 !important;">
                <img src="{{asset('media/icons/search.svg')}}" style="height: 20px">
            </button>
        </div>
        <div class="col-4 text-end pe-5" style="border-right: solid 1px #204F8C">
            <p class="mb-0" style="font-size: 18px;font-weight: 600;color:#204F8C ">Votre compte</p>
            <div style="font-size: 14px">
                <span class="pe-3" style="border-right: solid 1px #c6c2c2">Bienvenue</span>
                <a class="ps-3" href="" >Identifiez-vous</a>
            </div>
        </div>
        <div class="col-2 text-end ps-5">
            <div class="d-flex align-items-center">
                <div>
                    <p class="mb-0 me-1" style="font-size: 18px;font-weight: 600;color:#204F8C ">Panier</p>
                   <p class="mb-0" style="font-size: 14px"> (vide)</p>
                </div>
                <img src="{{asset('media/icons/panier.svg')}}" style="height:40px;">
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg  pt-0 pb-0 "
     style="background-color: #204F8C !important;border-radius: 0!important;">
    <div class="container-fluid ps-0">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="{{asset('/media/icons/navbar.svg')}}" style="height: 25px"/>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item" style="background-color: #3768a8">
                    <a class="nav-link active" aria-current="page" href="#">
                        <img src="{{asset('media/icons/home.svg')}}" style="height: 25px">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pc gamer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pc gamer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pc gamer</a>
                </li>

            </ul>
            <div class="d-flex">
                <a class="nav-link d-flex text-light align-items-center pe-4 ps-4" href="#" style="background-color: #f69c14 !important;border-right: solid 1px rgb(255,255,255,0.5)">
                    <img src="{{asset('media/icons/new.svg')}}" class="me-2" style="height: 15px">
                    <span >Neuf </span>
                </a>
                <a class="nav-link d-flex text-light align-items-center pe-4 ps-4" href="#" style="background-color: #f69c14 !important;">
                    <img src="{{asset('media/icons/occasion.svg')}}" class="me-2" style="height: 15px">
                    <span >Occasion</span>
                </a>
            </div>

        </div>
    </div>
</nav>
