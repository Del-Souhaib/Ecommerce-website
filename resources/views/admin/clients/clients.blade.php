<x-app-layout>
    <x-slot name="header">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="font-semibold text-xl mb-0 text-gray leading-tight align-items-center"
                style="font-weight:600;color: #204f8c">
                {{ __('Utilisateurs') }}
            </h2>

        </div>
    </x-slot>
    <style>

    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col" style="width: 10%">Nom</th>
                    <th scope="col" style="width: 13%">Email</th>
                    <th scope="col" style="width: 10%">Telephone</th>
                    <th scope="col" style="width: 10%">Ville</th>
                    <th scope="col" style="width: 10%">Adresse</th>
                    <th scope="col" style="width: 27%">Memebre depuit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->user_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->telephone}}</td>
                        <td>{{$user->city}}</td>
                        <td>{{$user->adresse}}</td>
                        <td>{{$user->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
