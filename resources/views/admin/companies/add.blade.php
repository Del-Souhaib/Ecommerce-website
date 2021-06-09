<x-app-layout>
    <x-slot name="header">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="font-semibold text-xl mb-0 text-gray leading-tight align-items-center"
                style="font-weight:600;color: #204f8c">
                {{ __('Ajouter Companie') }}
            </h2>
            <a href="{{url('/admin/companies')}}" class="btn ps-5 pe-5 text-light"
               style="background-color: #204f8c;border-radius: 0">
                Retour
            </a>
        </div>
    </x-slot>
    <style>

    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="post" action="{{'/admin/addcompanies'}}" enctype="multipart/form-data" class="container-fluid ">
                @csrf
                <div class="row align-items-center">
                    <div class="col-1">
                        <x-label for="name" :value="__('Nom')"/>
                    </div>
                    <div class="col-3">
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                 required autofocus/>
                    </div>
                    <div class="col-1">
                        <x-label for="logo" :value="__('Logo')"/>
                    </div>
                    <div class="col-3">
                        <x-input id="logo" class="block mt-1 w-full form-control" type="file" name="logo" :value="old('logo')"
                                 required autofocus/>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-4">
                        <x-button class="ml-3 ms-0" style="background-color: #204f8c ;border-radius: 0">
                            {{ __('Ajouter') }}
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
