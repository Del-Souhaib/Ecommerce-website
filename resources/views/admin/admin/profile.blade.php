<x-app-layout>
    <x-slot name="header">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="font-semibold text-xl mb-0 text-gray leading-tight align-items-center"
                style="font-weight:600;color: #204f8c">
                {{ __('Profile') }}
            </h2>
        </div>
    </x-slot>
    <style>

    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="post" action="{{url('/admin/updateprofile')}}" class="container-fluid ">
                @csrf
                <div class="row">
                    @if(session()->get('statut')=='updated')
                        <p class="alert  text-light" style="background-color: #204f8c;border-radius: 0">
                            Votre compte a ete mise à jour
                        </p>
                    @endif
                    <div class="col-12">
                        <p style="color: #204f8c;font-size: 22px;font-weight: 550">Compte information</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-1">
                        <x-label for="name" :value="__('Nom')"/>
                    </div>
                    <div class="col-3">
                        <x-input class="form-control" type="text" name="name" id="name" value="{{$admin->name}}"/>
                    </div>
                    <div class="col-1">
                        <x-label for="email" :value="__('Email')"/>
                    </div>
                    <div class="col-3">
                        <x-input class="form-control" type="email" name="email" id="email" value="{{$admin->email}}"/>
                    </div>
                </div>
                <div class="row align-items-center " style="margin-top: 50px">
                    <div class="col-12 ">
                        <x-input type="checkbox" id="modifypasswpord" name="modifypasswpord"/>
                        <label for="modifypasswpord">Modifier mot de passe</label>
                    </div>
                </div>
                <div class="row align-items-center passwpordarea mt-4" style="display: none">
                    <div class="col-2">
                        <label for="currentpasswpord">Actuel mot de passe</label>
                    </div>
                    <div class="col-3">
                        <x-input type="password" id="currentpasswpord" name="currentpasswpord"/>
                    </div>
                </div>
                <div class="row align-items-center mt-4 passwpordarea " style="display: none">
                    <div class="col-2">
                        <label for="nepassword">Nouveau mot de passe</label>
                    </div>
                    <div class="col-3">
                        <x-input type="password" id="nepassword" name="nepassword"/>
                    </div>
                    <div class="col-2">
                        <label for="nepassword2">Nouveau mot de passe</label>
                    </div>
                    <div class="col-3">
                        <x-input type="password" id="nepassword2" name="nepassword2"/>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <x-button class="me-2 ms-2" style="background-color: #204f8c;border-radius:0 ">Enregistrer
                    </x-button>
                </div>
                <div class="col-12 mt-4">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                        @endforeach
                    @endif
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#modifypasswpord').click(function () {
                if (this.checked) {
                    $('.passwpordarea').show()
                } else {
                    $('.passwpordarea').hide()
                }
            })
        })
    </script>
</x-app-layout>
