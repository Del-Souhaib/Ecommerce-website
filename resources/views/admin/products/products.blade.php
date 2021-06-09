<x-app-layout>
    <x-slot name="header">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="font-semibold text-xl mb-0 text-gray leading-tight align-items-center"
                style="font-weight:600;color: #204f8c">
                {{ __('Produits') }}
            </h2>
            <a href="{{url('admin/addproductpage')}}" class="btn ps-5 pe-5 text-light"
               style="background-color: #204f8c;border-radius: 0">
                Ajouter
            </a>
        </div>
    </x-slot>
    <style>

    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session()->get('statut')=='deleted')
                <p class="alert alert-danger " style="border-radius: 0">
                    produit supprimé
                </p>
            @elseif(session()->get('statut')=='updated')
                <p class="alert  "  style="border-radius: 0;background-color:#204f8c ">
                    produit mise a jour
                </p>
            @endif
            <table class="table">
                <thead>
                <tr>
                    <th scope="col" style="width: 10%">Titre</th>
                    <th scope="col" style="width: 13%">Categorie</th>
                    <th scope="col" style="width: 10%">Companie</th>
                    <th scope="col" style="width: 10%">Statut</th>
                    <th scope="col" style="width: 10%">Description</th>
                    <th scope="col" style="width: 27%">Fiche technique</th>
                    <th scope="col" style="width: 10%">Coleurs</th>
                    <th scope="col" style="width: 10%">Quiantite</th>
                    <th scope="col" style="width: 10%">Prix</th>
                    <th scope="col" style="width: 10%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->email}}</td>
                        <td>{{$product->telephone}}</td>
                        <td>{{$product->subject}}</td>
                        <td>{{$product->message}}</td>
                        <td>{{$product->file}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>
                            <button class="btn btn-danger delete" messageid="{{$message->id}}">Supprimer</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="deleteconfirmation" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{url('admin/deletecategory')}}" class="modal-content" style="border-radius: 0">
                @csrf
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <input type="hidden" name="messageid" id="messageid" value="">
                    <img src="{{asset('media/icons/warning.svg')}}" style="height: 40px">
                    <span class="ms-2 text-center">êtes-vous sûr de vouloir supprimer cette categorie</span>
                </div>
                <div class="modal-footer border-top-0">
                    <button class="btn btn-danger text-light pe-3 ps-3" style="border-radius: 0;">
                        Supprimer
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.delete').click(function () {
                $('#messageid').val($(this).attr('messageid'))
                $('#deleteconfirmation').modal('show')
            })
        })
    </script>
</x-app-layout>
