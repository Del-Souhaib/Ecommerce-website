<x-app-layout>
    <x-slot name="header">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="font-semibold text-xl mb-0 text-gray leading-tight align-items-center"
                style="font-weight:600;color: #204f8c">
                {{ __('Commandes') }}
            </h2>

        </div>
    </x-slot>
    <style>

    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="table table-bordered" style="font-size: 14px">
                <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Produits</th>
                    <th scope="col">Total</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Date</th>
                    {{--                    <th scope="col" style="width: 10%">Action</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($commendes as $commende)
                    <tr >
                        <td >{{$commende->client->user_name}}</td>
                        <td>{{$commende->client->email}}</td>
                        <td>{{$commende->client->telephone}}</td>
                        <td>{{$commende->client->adresse}} , {{$commende->client->city}}
                        <td>
                            @foreach($commende->items as $item)
                                <div class="d-flex">
                                    <a href="{{url('product/'.$item->pane->product->id)}}" class="me-1" style="color:black;text-decoration: none">
                                        - {{$item->pane->product->title}}
                                    </a> ({{$item->pane->quantity}})
                                    coleur:
                                        <div class="ms-2"
                                             style="height:20px;width:20px;border-radius:100px;background-color: {{$item->pane->color->name}}"></div>
                                </div><br>
                        @endforeach
                        <td>{{$commende->total}} MAD</td>
                        <td>
                            <select class="form-select commandestatut" commandeid="{{$commende->id}}"
                                    style="font-size: 14px;border-radius: 0">
                                <option value="En confirmation"
                                        @if($commende->statut=='En confirmation') selected="selected" @endif>
                                    En confirmation
                                </option>
                                <option value="En livraison"
                                        @if($commende->statut=='En livraison') selected="selected" @endif>
                                    En livraison
                                </option>
                                <option value="Livré" @if($commende->statut=='Livré') selected="selected" @endif>
                                    Livré
                                </option>
                            </select>
                        </td>
                        <td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$commende->created_at)->format('d M Y')}}</td>
                        {{--                        <td>--}}
                        {{--                            <a href="" class="btn btn-sm text-light" style="background-color: #204f8c;border-radius: 0"> Details</a>--}}
                        {{--                        </td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $('.commandestatut').change(function () {
            $commandeid = $(this).attr('commandeid')
            $.ajax({
                url: '/admin/updatecommandestatut',
                type: 'post',
                data: {
                    '_token': '{{csrf_token()}}',
                    'commande_id': $(this).attr('commandeid'),
                    'value': $(this).val()
                },
                success: function (e) {
                }
            })
        })
    </script>
</x-app-layout>
