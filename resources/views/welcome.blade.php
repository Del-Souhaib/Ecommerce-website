<!
<html>
<head>

    <x-parts.files/>
    <title>Home</title>
    <style>
        * {
            font-family: 'Noto Sans', sans-serif;
        }

        .header-swiper-container {
            width: 100%;
            height: 65%;
        }

        .header-swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .header-swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


        .hoverbutton:hover {
            background-color: #204f8c !important;
            color: white !important;
        }

        .card {
            color: #6c6767;
            border: none !important;
            cursor: pointer;
        }

        .card:hover {
            border-radius: 0 !important;
            box-shadow: -1px 2px 17px 0px rgba(32, 79, 140, 0.65);
            -webkit-box-shadow: -1px 2px 17px 0px rgba(32, 79, 140, 0.65);
            -moz-box-shadow: -1px 2px 17px 0px rgba(32, 79, 140, 0.65);
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-container {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            height: 80%;
            width: 100%;
        }

        .mySwiper {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

</head>
<body>
<header>
    <x-parts.header/>
    <div class="swiper-container header-swiper-container">
        <div class="swiper-wrapper header-swiper-wrapper">
            <div class="swiper-slide header-swiper-slide">
                <img src="{{asset('media/slider/image2.png')}}">
            </div>
            <div class="swiper-slide header-swiper-slide">
                <img src="{{asset('media/slider/image1.png')}}">
            </div>
            <div class="swiper-slide header-swiper-slide">
                <img src="{{asset('media/slider/image3.jpg')}}" class="img-fluid">

            </div>
            <div class="swiper-slide header-swiper-slide">
                <img src="{{asset('media/slider/image4.jpg')}}" class="img-fluid">

            </div>
        </div>
        <div class="swiper-button-next header-swiper-button-next"></div>
        <div class="swiper-button-prev header-swiper-button-prev"></div>
        <div class="swiper-pagination header-swiper-pagination"></div>
    </div>
</header>
<div class="container mt-2">
    <div class="row">
        <x-parts.client_navbar/>
        <div class="col-9 mt-3">
            <p style="color: #204f8c;font-size: 22px;font-weight: 600">PRODUITS POPULAIRES</p>
            <div class="row">
                @for($i=0;$i<=11;$i++)
                    <div class="col-3 card text-center mb-4 pb-2">
                        <div>
                            <img src="{{asset('media/products/product1.jpg')}}" class="img-fluid articleimage"/>
                            <button class="btn btn-sm rapide" data-bs-toggle="modal"
                                    data-bs-target="#articleinfo"
                                    style="display:none;left:25%;z-index:100;top:10%;position:absolute;background-color:#f0f0f0;color:rgb(29,28,28);border-radius: 0;border: solid 1px #f0f0f0 ">
                                Aperçu rapide
                            </button>
                        </div>
                        <a href="" class="mt-1" style="font-size: 13px;text-decoration: none;color: #6c6767">
                            PC Gamer UltraPC Ryzen5 GEN5-III
                        </a>
                        <span class="mt-1" style="color:#204f8c;font-size: 20px ">
                            270000 MAD
                        </span>
                        <span style="color: #559f45;font-size: 12.5px">
                            <img src="{{asset('media/icons/correct.svg')}}" style="width: 10px">
                            Produit en stock(2)
                        </span>
                        <div class="d-flex">
                            <button class="btn addbutton addbutton1" data-bs-toggle="modal"
                                    data-bs-target="#addedtopanesuccess"
                                    style="border-radius: 0 !important;background-color:#204f8c;height: 38px;width: 38px ">
                                <img src="{{asset('media/icons/plus.svg')}}" style="width: 18px">
                            </button>
                            <button class="btn addbutton addbutton2" data-bs-toggle="modal"
                                    data-bs-target="#addedtopanesuccess"
                                    style="border-radius: 0 !important;border-color: #204f8c;color: #204f8c">
                                Ajouter au panier
                            </button>
                        </div>
                    </div>
                @endfor
            </div>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addedtopanesuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content " style="border-radius: 0">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-5">
                        <img src="{{asset('media/products/product1.jpg')}}" class="img-fluid"/>
                    </div>
                    <div class="col-7">
                        <div class="d-flex align-items-center mb-5">
                            <img src="{{asset('media/icons/correct3.svg')}}" style="height: 20px">
                            <p style="color: #f69c14" class="mb-0 ms-2">Produit ajouté au panier avec succès</p>
                        </div>
                        <p class="mb-1" style="color: #204f8c;font-size: 17px;font-weight: 600">PC Gamer UltraPC Ryzen5
                            GEN5-III</p>
                        <p class="mb-1" style="color: #f69c14;font-size: 18px;font-weight: 550">1800 MAD</p>
                        <p style="color: #6c6767;font-size: 18px;font-weight: 400">Quantité : 1</p>
                        <div class="alert mt-5"
                             style="background-color:rgb(246,156,20,0.3);border-radius: 0;color: color: #f69c14 ">
                            <p class="mb-1">Il y a 5 articles dans votre panier.</p>
                            <p class="mb-1"><b>Total :</b> 50005 MAD</p>
                            <div class="d-flex">
                                <button class="btn btn-sm hoverbutton mt-2 me-2"
                                        style="border-color: #204f8c;color: #204f8c;border-radius: 0;background-color: rgb(32,79,140,0.2)">
                                    Continuer mes achats
                                </button>
                                <button class="btn btn-sm mt-2 d-flex align-items-center"
                                        style="border-color: #f69c14;color: white;border-radius: 0;background-color: #f69c14">
                                    <img src="{{asset('media/icons/correct2.svg')}}" style="width: 20px">
                                    <span class="ms-2">Commander</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="articleinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content " style="border-radius: 0">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-5">
{{--                        <img src="{{asset('media/products/product1.jpg')}}" class="img-fluid"/>--}}
                        <div
                            style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper-container mySwiper2"
                        >
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper-container mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <p class="mb-1" style="color: #204f8c;font-size: 22px;font-weight: 300">
                            PC Gamer UltraPC Ryzen5 GEN5-III
                        </p>
                        <p class="mb-1" style="color: #f69c14;font-size: 18px;font-weight: 550">1800 MAD</p>
                        <p style="color: #6c6767;font-size: 18px;font-weight: 400">Quantité : 1</p>
                        <p style="font-size: 13px">
                            La carte mère MSI B450M-A PRO MAX qui embarque un chipset AMD B450 est conçue pour
                            accueillir les processeurs AMD Ryzen 1000/2000/3000 et Athlon GE sur socket AMD AM4. Elle
                            permettra l'assemblage d'une configuration multimédia, gaming ou bureautique à coût
                            raisonnable.
                        </p>
                        <p><b>Etat : </b>Neuf</p>
                        <div class="">
                            <p class="d-flex align-items-center justify-content-end"
                               style="color: #559f45;font-size: 13px">
                                <img src="{{asset('media/icons/clock.svg')}}" class="me-2" style="width: 12px">
                                Produit en stock <b> (1 article)</b>
                            </p>
                            <div class="d-flex justify-content-end">
                                <input type="number" class="form-control me-5"
                                       style="width: 60px;height: 38px;border-radius: 0!important;border-color: #204f8c">
                                <button class="btn addbuttontype2 addbutton3" data-bs-toggle="modal"
                                        data-bs-target="#addedtopanesuccess"
                                        style="border-radius: 0 !important;background-color:#204f8c;height: 38px;width: 38px ">
                                    <img src="{{asset('media/icons/plus.svg')}}" style="width: 18px">
                                </button>
                                <button class="btn addbuttontype2 addbutton4" data-bs-toggle="modal"
                                        data-bs-target="#addedtopanesuccess"
                                        style="border-radius: 0 !important;border-color: #204f8c;color: #204f8c">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-parts.footer/>
<script>
    $(document).ready(function () {
        $('.addbutton').hover(function () {
            $(this).parent().children('.addbutton2').hide()
            $(this).parent().children('.addbutton1').css('width', '100%')

        })
        $('.addbutton').mouseout(function () {
            $(this).parent().children('.addbutton2').show()
            $(this).parent().children('.addbutton1').css('width', '38px')

        })

        $('.addbuttontype2').hover(function () {
            $(this).parent().children('.addbutton4').hide()
            $width = $(this).parent().children('.addbutton3').outerWidth() + $(this).parent().children('.addbutton4').outerWidth() + 'px'
            $(this).parent().children('.addbutton3').css('width', $width)
        })
        $('.addbuttontype2').mouseout(function () {
            $(this).parent().children('.addbutton4').show()
            $(this).parent().children('.addbutton3').css('width', '38px')

        })
        $('.rapide,.articleimage').hover(function () {
            $(this).parent().children('.articleimage').css('filter', 'blur(1px)')
            $(this).parent().children('.rapide').show()

        })
        $('.rapide,.articleimage').mouseout(function () {
            $(this).parent().children('.articleimage').css('filter', 'blur(0)')
            $(this).parent().children('.rapide').hide()
        })
    })
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>
</body>
</html>

