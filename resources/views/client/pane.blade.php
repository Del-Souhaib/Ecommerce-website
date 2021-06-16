<!
<html>
<head>

    <x-parts.files/>
    <title>Panier</title>
    <style>
        * {
            font-family: 'Noto Sans', sans-serif;
        }


    </style>

</head>
<body>
<header>
    <x-parts.header/>
</header>
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <p style="color: #204f8c;font-size: 28px;font-weight: 600">PANIER</p>
        </div>
        <div class="col-9">
            @foreach($panes as $pane)
                <div class="d-flex pb-2 pt-2"
                     style="border-bottom:solid 1px #c7c0c0;">
                    <a href="{{url('product/'.$pane->product_id)}}">
                        @foreach($pane->product->images as $image)
                            @if($loop->first)
                                <img src="{{asset('storage/products/'.$image->name)}}" style="height: 100px"
                                     class="img-fluid">
                            @endif
                        @endforeach
                    </a>
                    <div class="ms-5 d-flex justify-content-between" style="width: 100%">
                        <a href="{{url('product/'.$pane->product_id)}}" style="text-decoration: none;">
                            <p class="mb-1" style="color: #204f8c;font-size: 20px">{{$pane->product->title}}</p>
                            <p style="color: #f69c14;">{{$pane->product->price}} MAD</p>
                            <div class="d-flex align-items-center" style="color: #6c6767">
                                Coleur
                                <div class="ms-1"
                                     style="width:20px;height:20px;border-radius: 100px;background-color: {{$pane->color->name}}"></div>
                            </div>
                        </a>
                        <div class="d-flex flex-column align-items-end">
                            <p class="mb-1" style="font-size: 18px;color: #204f8c;font-weight: 600">
                                {{$pane->product->price * $pane->quantity}} MAD
                            </p>
                            <input type="number" class="form-control mb-2" value="{{$pane->quantity}}" name="quantity"
                                   style="width: 70px;border-radius: 0">
                            <form method="post" action="{{url('deletepanier')}}">
                                @csrf
                                <input type="hidden" name="pane_id" value="{{$pane->id}}">
                                <button style="border: none;background-color: transparent;width: 30px">
                                    <img src="{{asset('media/icons/trash.svg')}}" style="height: 20px">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-3">
            <div class="p-3" style="border:solid 1px #dedbdb;color: #6c6767">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-0">{{count($panes)}} articles</p>
                    <p class="mb-0" style="font-size: 19px;">{{$total}} MAD</p>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Livraison</p>
                    <p style="font-size: 19px;">gratuit</p>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p style="font-size: 19px;">TOTAL</p>
                    <p style="font-size: 19px;color: #f69c14">{{$total}} MAD</p>
                </div>
                <button class="btn text-light mt-4" style="background-color: #f69c14;width: 100%;border-radius: 0">
                    Commander
                </button>
            </div>
        </div>
    </div>
</div>


<x-parts.footer/>
<script>
    $(document).ready(function () {
    })

</script>
</body>
</html>

