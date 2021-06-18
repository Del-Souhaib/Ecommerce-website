<!
<html>
<head>

    <x-parts.files/>
    <title>Commandes</title>
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
            <p style="color: #204f8c;font-size: 28px;font-weight: 600">MES COMMANDES</p>
        </div>
        @if($commandes)
            @foreach($commandes as $commande)
                <div class="col-10" style="border: solid 1px #c7c0c0;">
                    <div class="mb-2 pb-2" style="">
                        @foreach($commande->items as $item)
                            <div class="d-flex pb-2 pt-2">
                                <a href="{{url('product/'.$item->product_id)}}">
                                    @foreach($item->pane->product->images as $image)
                                        @if($loop->first)
                                            <img src="{{asset('storage/products/'.$image->name)}}" style="height: 100px"
                                                 class="img-fluid">
                                        @endif
                                    @endforeach
                                </a>
                                <div class="ms-5 d-flex justify-content-between" style="width: 100%">
                                    <a href="{{url('product/'.$item->pane->product_id)}}"
                                       style="text-decoration: none;">
                                        <p class="mb-1"
                                           style="color: #204f8c;font-size: 20px">{{$item->pane->product->title}}</p>
                                        <p style="color: #f69c14;">{{$item->pane->product->price}} MAD</p>
                                    </a>
                                    <div class="d-flex flex-column align-items-end">
                                        {{--                                        <input type="number" disabled="disabled"--}}
                                        {{--                                               class="form-control mb-2 product_quantity"--}}
                                        {{--                                               value="{{$item->pane->quantity}}"--}}
                                        {{--                                               name="quantity" min="1"--}}
                                        {{--                                               style="width: 70px;border-radius: 0">--}}
                                        <table class="table table-borderless" style="color: #6c6767">
                                            <tr>
                                                <td>Quantité</td>
                                                <td>{{$item->pane->quantity}}</td>
                                            </tr>
                                            <tr>
                                                <td>Coleur</td>
                                                <td>
                                                    <div class="ms-1"
                                                         style="width:20px;height:20px;border-radius: 100px;background-color: {{$item->pane->color->name}}"></div>
                                                </td>
                                            </tr>
                                        </table>
                                        {{--                                        <p style="color: #6c6767">Quantité : {{$item->pane->quantity}}</p>--}}
                                        {{--                                        <div class="d-flex align-items-center" style="color: #6c6767">--}}
                                        {{--                                            Coleur--}}
                                        {{--                                            <div class="ms-1"--}}
                                        {{--                                                 style="width:20px;height:20px;border-radius: 100px;background-color: {{$item->pane->color->name}}"></div>--}}
                                        {{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                            @if(!$loop->last)
                                <div class="d-flex justify-content-center">
                                    <hr style="width: 70%"/>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center " style="border: solid 1px #c7c0c0;">
                    <p class="text-end" style="color: #204f8c;font-size: 20px;">Prix total
                        : {{$commande->total}} MAD</p>

                </div>
            @endforeach
        @else
            <p class="alert pt-3 pb-3 mt-5" style="background-color: #fcf8e3;color: #8a83a2">Vous n'avez pas encore
                passé de commande</p>
        @endif
    </div>
</div>
<x-parts.footer/>
<script>
    $(document).ready(function () {

    })

</script>
</body>
</html>

