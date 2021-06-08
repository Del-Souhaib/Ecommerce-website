<!
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <x-parts.files/>
    <title>Dashboard</title>
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
</header>
<div class="container" style="position: sticky;top: 0">
    <div class="row">
        <div class="col-2">
            <x-parts.user-navbar/>
        </div>
        <div class="col-10">

        </div>
    </div>
</div>

<x-parts.footer/>
<script>

</script>
</body>
</html>

