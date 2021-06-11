<div class="col-3">
    <div class="pt-3 " style="border: solid 1px rgb(238,228,228)">
        <p class="mb-0 ps-2" style="font-size:20px;font-weight: 600;color: #204f8c;">Neuf</p>
        <p style="border: solid 2px #204f8c;background-color: #204f8c"></p>
{{--        @foreach($newproudcts as $newproudct)--}}
{{--            <a href="" class="row pb-3 pt-3 ps-2"--}}
{{--               style="text-decoration: none;border-bottom: solid 1px rgb(238,228,228)">--}}
{{--                <div class="col-5">--}}
{{--                    <img src="{{asset('media/products/'.$newproudct->images[0]->name)}}" class="img-fluid">--}}
{{--                </div>--}}
{{--                <div class="col-7">--}}
{{--                    <p class="mb-2" style="font-size: 14px;color: #6c6767">{{$newproudct->title}}</p>--}}
{{--                    <p style="color: #204f8c;font-weight: 600">{{$newproudct->price}} MAD</p>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        @endforeach--}}
        <div class="text-center">
            <a href="" class="btn btn-sm hoverbutton "
               style="border-color: #204f8c;color:#204f8c;border-radius: 0 !important;width:90%">
                Tous les produits Neuf
            </a>
        </div>
    </div>
    <div class="mt-4 pt-3" style="border: solid 1px rgb(238,228,228)">
        <p class="mb-0 ps-2" style="font-size:20px;font-weight: 600;color: #204f8c;">Occasion</p>
        <p style="border: solid 2px #204f8c;background-color: #204f8c"></p>
        @foreach($usedproudcts as $usedproudct)
            <a href="" class="row pb-3 pt-3 ps-2"
               style="text-decoration: none;border-bottom: solid 1px rgb(238,228,228)">
                <div class="col-5">
                    <img src="{{asset('media/products/'.$usedproudct->images[0]->name)}}" class="img-fluid">
                </div>
                <div class="col-7">
                    <p class="mb-2" style="font-size: 14px;color: #6c6767">{{$usedproudct->title}}</p>
                    <p style="color: #204f8c;font-weight: 600">{{$usedproudct->price}} MAD</p>
                </div>
            </a>
        @endforeach


        <div class="text-center">
            <a href="" class="btn btn-sm hoverbutton"
               style="border-color: #204f8c;color:#204f8c;border-radius: 0 !important;width: 90%">
                Tous les produits Occasion
            </a>
        </div>
    </div>
    <div class="mt-4 pt-3" style="border: solid 1px rgb(238,228,228)">
        <p class="mb-0 ps-2" style="font-size:20px;font-weight: 600;color: #204f8c;">Meilleures ventes</p>
        <p style="border: solid 2px #204f8c;background-color: #204f8c"></p>
        @for($i=0;$i<=3;$i++)
            <a href="" class="row pb-3 pt-3 ps-2"
               style="text-decoration: none;border-bottom: solid 1px rgb(238,228,228)">
                <div class="col-5">
                    <img src="{{asset('media/products/product1.jpg')}}" class="img-fluid">
                </div>
                <div class="col-7">
                    <p class="mb-2" style="font-size: 14px;color: #6c6767">Asus ROG G512L-HN087 Intel...</p>
                    <p style="color: #204f8c;font-weight: 600">20 900,00 MAD</p>
                </div>
            </a>
        @endfor
        <div class="text-center">
            <a href="" class="btn btn-sm hoverbutton"
               style="border-color: #204f8c;color:#204f8c;border-radius: 0 !important;width: 90%">
                Toutes les meilleures ventes
            </a>
        </div>
    </div>
</div>
